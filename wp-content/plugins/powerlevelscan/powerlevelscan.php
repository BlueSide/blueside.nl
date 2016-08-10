<?php
/*
  Plugin Name: Power Level Scan
  Plugin URI:  http://www.blueside.nl/
  Description: Enter a URL and dynamically generate a test report for the given website
  Version:     0.1
  Author:      Marlon Peeters
  Author URI:  http://www.blueside.nl/
  License:     
  License URI: 
*/


/** 
 * NOTE: 
 * The awesome WordPress database wrapper returns only string values from SELECT queries.
 * For that reason all columns in the bs_powerlevelscan are prefixed with a datatype
 * so we know what datatype the column was
 * 
 * i - integer
 * s - string
 * b - boolean
 * f - float
 **/				     

/*
Script to set the width of all bs-progress-bar elements

var amountOfElements = document.getElementsByClassName("bs-progress-bar").length;
for(var i = 0; i < amountOfElements; i++)
{
	document.getElementsByClassName("bs-progress-bar")[i].setAttribute("style", "width: " + document.getElementsByClassName("bs-progress-bar")[i].innerHTML + "%");
}

 */


include_once("debukzh.php");
require_once("pls_Scan.php");

define('PLS_DATA_TABLE', 'bs_powerlevelscans');
define('PLS_SETTINGS_TABLE', 'bs_powerlevelscan_settings');

function pls_handler($attr)
{
    global $wpdb;
    $output;
    // SELECT type FROM bs_powerlevelscan WHERE id=992
    // Get data
    $result = $wpdb->get_row(
	'SELECT `'.$attr['type'].'` FROM `'.PLS_DATA_TABLE.'` WHERE `id` = '.get_the_ID(),
	ARRAY_A
    );
    
    // Get representation type
    switch($attr['out'])
    {
	case 'text':
	$output = $result[$attr['type']];
	break;
	case 'boolean':
	$output = pls_renderBoolean($result[$attr['type']]);
	break;
	case 'wheel':
	break;
	case 'progressbar':
	$output = pls_renderProgressbar($result[$attr['type']]);
	break;
	default:
	$output = $result[$attr['type']];
    }
    
    return $output;
}
add_shortcode('bs_pls', 'pls_handler');

function pls_renderBoolean($value)
{   
    return $value ? get_option('icon_true') : get_option('icon_false');
}

function pls_renderProgressbar($value)
{
    // TODO: add JS script to set the width and color
    return str_replace('#VALUE#', $value, get_option('progressbar'));
}
// Initialze
add_action("admin_menu", "pls_admin_add_page");

function pls_admin_add_page()
{
    add_menu_page("Power Level Scan", "Power Level Scan", "manage_options", "pls_settings", "pls_settings_page");
    add_action("admin_init", "register_global_pls_settings");
}

function register_global_pls_settings()
{
    //register our settings
    register_setting( 'pls_global_settings', 'icon_true' );
    register_setting( 'pls_global_settings', 'icon_false' );
    register_setting( 'pls_global_settings', 'progressbar' );
}

function pls_settings_page()
{
?>
    <div class="wrap">
	<?php
	//TODO: come up with a better check
	if(isset($_POST['site-title']))
	{
	    pls_insertPost();
	}
	if(isset($_POST['scan_element_name']) && isset($_POST['scan_element_format']))
	{
	    //
	}
	?>
	<div style="margin-top: 30px">
	    <h1>Create new Power Level Scan</h1>
	    <h2>Create Scan</h2>
	    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]."?page=pls_settings"); ?>" >
		<p>Site title:<input type="text" name="site-title" /></p>
		<p><input type="checkbox" name="bSitemapPresent" />Sitemap present?</p>
		<p>URL:<input type="text" name="url" /></p>
		<p>test<input type="text" name="test" /></p>
		<input class="button button-primary" name="Submit" type="submit" value="Create Scan" />
	    </form>
	    <h2>Add Scan method</h2>
	    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]."?page=pls_settings"); ?>" >
		<p>Name<input type="text" name="scan_element_name" /></p>
		<p>Format<input type="text" name="scan_element_format" /></p>
		<input class="button button-primary" name="Submit" type="submit" value="Create Scan" />
	    </form>
	</div>
	<h1>Global Power Level Scan settings</h1>

	<form method="post" action="options.php">
	    <?php settings_fields( 'pls_global_settings' ); ?>
	    <?php do_settings_sections( 'pls_global_settings' ); ?>
	    <table class="form-table">
		<tr valign="top">
		    <th scope="row">Icon true</th>
		    <td><input type="text" name="icon_true" value="<?php echo esc_attr( get_option('icon_true') ); ?>" size="60" /></td>
		</tr>
		
		<tr valign="top">
		    <th scope="row">Icon false</th>
		    <td><input type="text" name="icon_false" value="<?php echo esc_attr( get_option('icon_false') ); ?>" size="60" /></td>
		</tr>
		
		<tr valign="top">
		    <th scope="row">Progressbar</th>
		    <td><input type="text" name="progressbar" value="<?php echo esc_attr( get_option('progressbar') ); ?>" size="60" /></td>
		</tr>
	    </table>
	    
	    <?php submit_button(); ?>

	</form>
    </div>
<?php
}

function pls_insertPost()
{
    global $wpdb;
    $scans = new Scans();
    $scans->addField('test', '%s');
    
    $currentUser = wp_get_current_user();
    $author = get_current_user_id();
    $title = $_POST['site-title'];
    
    $postData = array(
        'ID' => $postID,
        'post_author' => $author,
        'post_content' => '',
        'post_content_filtered' => '',
        'post_title' => $title,
        'post_excerpt' => '',
        'post_status' => 'draft',
        'post_type' => 'page',
        'comment_status' => '',
        'ping_status' => '',
        'post_password' => '',
        'to_ping' =>  '',
        'pinged' => '',
        'post_parent' => 0,
        'menu_order' => 0,
        'guid' => '',
        'import_id' => 0,
        'context' => '',
    );

    $postID = wp_insert_post($postData);

    if($postID != 0)
    {
	$data = ['id' => $postID];
	$format = [];
	
	foreach($scans->fields as $field)
	{
	    $data[$field['name']] = 'test';
	    $format[] = $field['format'];
	}
	var_dump($format);

        // Create new row in bs_powerlevelscan
        if(!$wpdb->insert(PLS_DATA_TABLE, $data, $format))
	{
	    echo $wpdb->last_error;
	}	
    }
    else
    {
        echo "There was an error creating the post.";
    }
    
}

function pls_getData($field_name, $format)
{
    $result;
    if($format == '%b')
    {
	$result = isset($_POST[$field_name]);
    }
    else
    {
	$result = $_POST[$field_name];
    }
    
    return $result;
}
?>
</div>
