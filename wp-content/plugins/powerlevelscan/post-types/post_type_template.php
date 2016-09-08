<?php

if(!class_exists('Post_Type_Template'))
{
    /**
     * A PostTypeTemplate class that provides 3 additional meta fields
     */
    class Post_Type_Template
    {
        const POST_TYPE	= "power_level_scan";
        private $_meta	= array(
            array(scaled_images, 'performance'),
            array(optimized_images, 'performance'),
            array(image_resolution, 'performance'),
            array(minify_css, 'performance'),
            array(minify_html, 'performance'),
            array(minify_javascript, 'performance'),
            array(parsing_javascript, 'performance'),
            array(query_strings, 'performance'),
            array(scripts_styles_order, 'performance'),
            array(CSS_import, 'performance'),
            array(combine_css, 'performance'),
            array(specify_cache, 'performance'),
            array(configure_browsercache, 'performance'),
            array(specify_charset, 'performance'),
            array(bad_requests, 'performance'),
            array(landingpage_redirects, 'performance'),
            array(Gzip_compression, 'performance'),
            array(keep_alive, 'performance'),
            array(external_javascript, 'performance'),
            array(redirects, 'performance'),
            array(size_http_requests, 'performance'),
            array(CSS_doc_head, 'performance'),
            array(resources_consistent_url, 'performance'),
            array(accept_encoding_header, 'performance'),
            array(CSS_sprites, 'performance'),
            array(load_asynchronous, 'performance'),
            array(characterset_meta, 'performance'),
            array(sitemap, 'findability'),
            array(good_url, 'findability'),
            array(good_h1headers, 'findability'),
            array(breadcrumbs, 'findability'),
            array(link_authority, 'findability'),
            array(seo_titles, 'findability'),
            array(meta_descriptions, 'findability'),
            array(meta_keywords, 'findability'),
            array(meta_descriptions_images, 'findability'),
            array(text_per_page, 'findability'),
            array(usability),
        );
	
        /**
         * The Constructor
         */
        function __construct()
        {
            // register actions
            add_action('init', array(&$this, 'init'));
            add_action('admin_init', array(&$this, 'admin_init'));
        }

        /**
         * hook into WP's init action hook
         */
        function init()
        {
            // Initialize Post Type
            $this->create_post_type();
            add_action('save_post', array(&$this, 'save_post'));

            // Register shortcodes
            add_shortcode( 'bs_pls', array(&$this, 'bs_pls_handler'));

            // Load JavaScript in footer
            wp_enqueue_script( 'powerlevelscan', WP_CONTENT_URL.'/plugins/powerlevelscan/js/powerlevelscan.js', array('jquery'), null, true);
        }

        function bs_pls_handler($attr, $content = null)
        {
            // Fetch scan type
            switch($attr['scan'])
            {
            case "performance":
                $value = $this->pls_getPerformanceScore();
                break;
            case "findability":
                $value = $this->pls_getFindabilityScore();                
                break;
            default:
                $value = get_post_meta(get_the_id(), $attr['scan'], true);
                break;
            }
            // Fetch graphic type
            switch($attr['type'])
            {
             
            case 'boolean':
                $output = $value ? get_option("icon_true") : get_option("icon_false");
                break;
            case 'progress_bar':
                $output = $this->pls_renderProgressBar($value, $content);
                break;
            case 'progress_bar_circle':
                $output = $this->pls_renderProgressBarCircle($value, $content);
                break;
            case 'text':
            default:
                $output = $value;
            }

            // Parse shortcodes in shortcode (yo dawg...)
            $output = do_shortcode($output);
            return $output;
        }

        function pls_getPerformanceScore()
        {
            $count = 0;
            $sum = 0;
            foreach($this->_meta as $field)
            {
                if($field[1] === 'performance')
                {
                    $count++;
                    $sum += get_post_meta(get_the_id(), $field[0], true);
                }
            }
            if ($sum != 0)
                $result = floor($sum / $count);
            else
                $result = 0;
            return $result;
        }

        function pls_getFindabilityScore()
        {
            $count = 0;
            $sum = 0;
            foreach($this->_meta as $field)
            {
                if($field[1] === 'findability')
                {
                    $count++;
                    if(get_post_meta(get_the_id(), $field[0], true) === 'on')
                        $sum++;
                }
            }
            if ($sum != 0)
                $result = floor(($sum / $count) * 100);
            else
                $result = 0;
            return $result;
        }

        function pls_renderProgressBar($value, $content)
        {
            return str_replace('#VALUE#', $value, get_option('progress_bar'));
        }

        function pls_renderProgressBarCircle($value, $content)
        {
            $input = get_option('progress_bar_circle');
            return (string)str_replace('#VALUE#', $value, $input);
        }
        
        /**
         * Create the post type
         */
        function create_post_type()
        {
            register_post_type(self::POST_TYPE,
                               array(
                                   'labels' => array(
                                       'name' => __(sprintf('%ss', ucwords(str_replace("_", " ", self::POST_TYPE)))),
                                       'singular_name' => __(ucwords(str_replace("_", " ", self::POST_TYPE)))
                                   ),
                                   'public' => true,
                                   'has_archive' => true,
                                   'description' => __("A collection of website metric results to give the user a rating of a specific website"),
                                   'supports' => array(
                                       'title', 'editor', 'excerpt', 
                                   ),
                               )
            );
        }
	
        /**
         * Save the metaboxes for this custom post type
         */
        function save_post($post_id)
        {
            // verify if this is an auto save routine. 
            // If it is our form has not been submitted, so we dont want to do anything
            if(defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
            {
                return;
            }
            
            if(isset($_POST['post_type']) && $_POST['post_type'] == self::POST_TYPE && current_user_can('edit_post', $post_id))
            {
                foreach($this->_meta as $field_name)
                {
                    // Update the post's meta field
                    update_post_meta($post_id, $field_name[0], $_POST[$field_name[0]]);
                }
            }
            else
            {
                return;
            }
        }

        /**
         * hook into WP's admin_init action hook
         */
        function admin_init()
        {			
            // Add metaboxes
            add_action('add_meta_boxes', array(&$this, 'add_meta_boxes'));
            echo wp_enqueue_style('pls_editor_style', plugins_url('/../css/editor-style.css', __FILE__));
        }
	
        /**
         * hook into WP's add_meta_boxes action hook
         */
        function add_meta_boxes()
        {
            // Add this metabox to every selected post
            add_meta_box( 
                sprintf('%s_section', self::POST_TYPE),
                sprintf('%s Information', ucwords(str_replace("_", " ", self::POST_TYPE))),
                array(&$this, 'add_inner_meta_boxes'),
                self::POST_TYPE
            );					
        }
    
        /**
         * called off of the add meta box
         */		
        function add_inner_meta_boxes($post)
        {		
            // Render the job order metabox
            include(sprintf("%s/../templates/%s_metabox.php", dirname(__FILE__), self::POST_TYPE));			
        }

    }
}