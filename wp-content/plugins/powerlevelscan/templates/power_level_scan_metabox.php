<table>

    <tr valign="top">
        <th class="metabox_label_column">
            <label for="scaled_images">Gebruik geschaalde afbeeldingen</label>
        </th>
        <td>
            <input type="number" min="1" max="100" id="scaled_images" name="scaled_images" value="<?php echo @get_post_meta($post->ID, 'scaled_images', true); ?>" />
        </td>
	<td class="metabox_label_shortcode">[bs_pls scan="scaled_images"]</td>
    </tr>
    
    <tr valign="top">
        <th class="metabox_label_column">
            <label for="optimized_images">Gebruik geoptimaliseerde afbeeldingen</label>
        </th>
        <td>
            <input type="number" min="1" max="100" id="optimized_images" name="optimized_images" value="<?php echo @get_post_meta($post->ID, 'optimized_images', true); ?>" />
        </td>
	<td class="metabox_label_shortcode">[bs_pls scan="optimized_images"]</td>
    </tr>

    <tr valign="top">
        <th class="metabox_label_column">
            <label for="image_resolution">Specificeer de afmetingen van afbeeldingen</label>
        </th>
        <td>
            <input type="number" min="1" max="100" id="image_resolution" name="image_resolution" value="<?php echo @get_post_meta($post->ID, 'image_resolution', true); ?>" />
        </td>
	<td class="metabox_label_shortcode">[bs_pls scan="image_resolution"]</td>
    </tr>
    
    <tr valign="top">
        <th class="metabox_label_column">
            <label for="minify_css">Minificeer CSS</label>
        </th>
        <td>
            <input type="number" min="1" max="100" id="minify_css" name="minify_css" value="<?php echo @get_post_meta($post->ID, 'minify_css', true); ?>" />
        </td>
	<td class="metabox_label_shortcode">[bs_pls scan="minify_css"]</td>
    </tr>

    <tr valign="top">
        <th class="metabox_label_column">
            <label for="minify_html">Minificeer HTML</label>
        </th>
        <td>
            <input type="number" min="1" max="100" id="minify_html" name="minify_html" value="<?php echo @get_post_meta($post->ID, 'minify_html', true); ?>" />
        </td>
	<td class="metabox_label_shortcode">[bs_pls scan="minify_html"]</td>
    </tr>

    <tr valign="top">
        <th class="metabox_label_column">
            <label for="minify_javascript">Minificeer Javascript</label>
        </th>
        <td>
            <input type="number" min="1" max="100" id="minify_javascript" name="minify_javascript" value="<?php echo @get_post_meta($post->ID, 'minify_javascript', true); ?>" />
        </td>
	<td class="metabox_label_shortcode">[bs_pls scan="minify_javascript"]</td>
    </tr>

    <tr valign="top">
        <th class="metabox_label_column">
            <label for="parsing_javascript">Stel het parsen van Javascript uit</label>
        </th>
        <td>
            <input type="number" min="1" max="100" id="parsing_javascript" name="parsing_javascript" value="<?php echo @get_post_meta($post->ID, 'parsing_javascript', true); ?>" />
        </td>
	<td class="metabox_label_shortcode">[bs_pls scan="parsing_javascript"]</td>
    </tr>

    <tr valign="top">
        <th class="metabox_label_column">
            <label for="query_strings">Verwijder query strings uit vaste bronnen</label>
        </th>
        <td>
            <input type="number" min="1" max="100" id="query_strings" name="query_strings" value="<?php echo @get_post_meta($post->ID, 'query_strings', true); ?>" />
        </td>
	<td class="metabox_label_shortcode">[bs_pls scan="query_strings"]</td>
    </tr>

    <tr valign="top">
        <th class="metabox_label_column">
            <label for="scripts_styles_order">Laad scripts en styles op de goede volgorde in</label>
        </th>
        <td>
            <input type="number" min="1" max="100" id="scripts_styles_order" name="scripts_styles_order" value="<?php echo @get_post_meta($post->ID, 'scripts_styles_order', true); ?>" />
        </td>
	<td class="metabox_label_shortcode">[bs_pls scan="scripts_styles_order"]</td>
    </tr>

    <tr valign="top">
        <th class="metabox_label_column">
            <label for="CSS_import">Voorkomt CSS @import</label>
        </th>
        <td>
            <input type="number" min="1" max="100" id="CSS_import" name="CSS_import" value="<?php echo @get_post_meta($post->ID, 'CSS_import', true); ?>" />
        </td>
	<td class="metabox_label_shortcode">[bs_pls scan="CSS_import"]</td>
    </tr>

    <tr valign="top">
        <th class="metabox_label_column">
            <label for="combine_css">Combineer externe CSS bestanden</label>
        </th>
        <td>
            <input type="number" min="1" max="100" id="combine_css" name="combine_css" value="<?php echo @get_post_meta($post->ID, 'combine_css', true); ?>" />
        </td>
	<td class="metabox_label_shortcode">[bs_pls scan="combine_css"]</td>
    </tr>

    <tr valign="top">
        <th class="metabox_label_column">
            <label for="specify_cache">Specificeer cache validatie</label>
        </th>
        <td>
            <input type="number" min="1" max="100" id="specify_cache" name="specify_cache" value="<?php echo @get_post_meta($post->ID, 'specify_cache', true); ?>" />
        </td>
	<td class="metabox_label_shortcode">[bs_pls scan="specify_cache"]</td>
    </tr>

    <tr valign="top">
        <th class="metabox_label_column">
            <label for="configure_browsercache">Configureer je browsercaching</label>
        </th>
        <td>
            <input type="number" min="1" max="100" id="configure_browsercache" name="configure_browsercache" value="<?php echo @get_post_meta($post->ID, 'configure_browsercache', true); ?>" />
        </td>
	<td class="metabox_label_shortcode">[bs_pls scan="configure_browsercache"]</td>
    </tr>

    <tr valign="top">
        <th class="metabox_label_column">
            <label for="specify_charset">Specify a character set early</label>
        </th>
        <td>
            <input type="number" min="1" max="100" id="specify_charset" name="specify_charset" value="<?php echo @get_post_meta($post->ID, 'specify_charset', true); ?>" />
        </td>
	<td class="metabox_label_shortcode">[bs_pls scan="specify_charset"]</td>
    </tr>

    <tr valign="top">
        <th class="metabox_label_column">
            <label for="bad_requests">Voorkom slechte requests</label>
        </th>
        <td>
            <input type="number" min="1" max="100" id="bad_requests" name="bad_requests" value="<?php echo @get_post_meta($post->ID, 'bad_requests', true); ?>" />
        </td>
	<td class="metabox_label_shortcode">[bs_pls scan="bad_requests"]</td>
    </tr>

    <tr valign="top">
        <th class="metabox_label_column">
            <label for="landingpage_redirects">Voorkom landingspagina redirects</label>
        </th>
        <td>
            <input type="number" min="1" max="100" id="landingpage_redirects" name="landingpage_redirects" value="<?php echo @get_post_meta($post->ID, 'landingpage_redirects', true); ?>" />
        </td>
	<td class="metabox_label_shortcode">[bs_pls scan="landingpage_redirects"]</td>
    </tr>

    <tr valign="top">
        <th class="metabox_label_column">
            <label for="Gzip_compression">Configureer Gzip compressie</label>
        </th>
        <td>
            <input type="number" min="1" max="100" id="Gzip_compression" name="Gzip_compression" value="<?php echo @get_post_meta($post->ID, 'Gzip_compression', true); ?>" />
        </td>
	<td class="metabox_label_shortcode">[bs_pls scan="Gzip_compression"]</td>
    </tr>

    <tr valign="top">
        <th class="metabox_label_column">
            <label for="keep_alive">Configureer Keep-Alive</label>
        </th>
        <td>
            <input type="number" min="1" max="100" id="keep_alive" name="keep_alive" value="<?php echo @get_post_meta($post->ID, 'keep_alive', true); ?>" />
        </td>
	<td class="metabox_label_shortcode">[bs_pls scan="keep_alive"]</td>
    </tr>

    <tr valign="top">
        <th class="metabox_label_column">
            <label for="external_javascript">Combineer externe Javascript bestanden</label>
        </th>
        <td>
            <input type="number" min="1" max="100" id="external_javascript" name="external_javascript" value="<?php echo @get_post_meta($post->ID, 'external_javascript', true); ?>" />
        </td>
	<td class="metabox_label_shortcode">[bs_pls scan="external_javascript"]</td>
    </tr>	

    <tr valign="top">
        <th class="metabox_label_column">
            <label for="redirects">Verminder redirects</label>
        </th>
        <td>
            <input type="number" min="1" max="100" id="redirects" name="redirects" value="<?php echo @get_post_meta($post->ID, 'redirects', true); ?>" />
        </td>
	<td class="metabox_label_shortcode">[bs_pls scan="redirects"]</td>
    </tr>	
    
    <tr valign="top">
        <th class="metabox_label_column">
            <label for="size_http_requests">Verminder de grootte van HTTP requests</label>
        </th>
        <td>
            <input type="number" min="1" max="100" id="size_http_requests" name="size_http_requests" value="<?php echo @get_post_meta($post->ID, 'size_http_requests', true); ?>" />
        </td>
	<td class="metabox_label_shortcode">[bs_pls scan="size_http_requests"]</td>
    </tr>	
    
    <tr valign="top">
        <th class="metabox_label_column">
            <label for="CSS_doc_head">Verplaats CSS bestanden naar de document head</label>
        </th>
        <td>
            <input type="number" min="1" max="100" id="CSS_doc_head" name="CSS_doc_head" value="<?php echo @get_post_meta($post->ID, 'CSS_doc_head', true); ?>" />
        </td>
	<td class="metabox_label_shortcode">[bs_pls scan="CSS_doc_head"]</td>
    </tr>	
    
    <tr valign="top">
        <th class="metabox_label_column">
            <label for="resources_consistent_url">Laad resources in vanuit een consistente URL</label>
        </th>
        <td>
            <input type="number" min="1" max="100" id="resources_consistent_url" name="resources_consistent_url" value="<?php echo @get_post_meta($post->ID, 'resources_consistent_url', true); ?>" />
        </td>
	<td class="metabox_label_shortcode">[bs_pls scan="resources_consistent_url"]</td>
    </tr>	
    
    <tr valign="top">
        <th class="metabox_label_column">
            <label for="accept_encoding_header">Specificeer een Vary: Accept-Encoding header</label>
        </th>
        <td>
            <input type="number" min="1" max="100" id="accept_encoding_header" name="accept_encoding_header" value="<?php echo @get_post_meta($post->ID, 'accept_encoding_header', true); ?>" />
        </td>
	<td class="metabox_label_shortcode">[bs_pls scan="accept_encoding_header"]</td>
    </tr>	
    
    <tr valign="top">
        <th class="metabox_label_column">
            <label for="CSS_sprites">Combineer afbeeldingen doormiddel van CSS sprites</label>
        </th>
        <td>
            <input type="number" min="1" max="100" id="CSS_sprites" name="CSS_sprites" value="<?php echo @get_post_meta($post->ID, 'CSS_sprites', true); ?>" />
        </td>
	<td class="metabox_label_shortcode">[bs_pls scan="CSS_sprites"]</td>
    </tr>	
    
    <tr valign="top">
        <th class="metabox_label_column">
            <label for="load_asynchronous">Laad asynchroon vanuit verschillende bronnen</label>
        </th>
        <td>
            <input type="number" min="1" max="100" id="load_asynchronous" name="load_asynchronous" value="<?php echo @get_post_meta($post->ID, 'load_asynchronous', true); ?>" />
        </td>
	<td class="metabox_label_shortcode">[bs_pls scan="load_asynchronous"]</td>
    </tr>	
    
    <tr valign="top">
        <th class="metabox_label_column">
            <label for="characterset_meta">Voorkom een character set in de meta tag</label>
        </th>
        <td>
            <input type="number" min="1" max="100" id="characterset_meta" name="characterset_meta" value="<?php echo @get_post_meta($post->ID, 'characterset_meta', true); ?>" />
        </td>
	<td class="metabox_label_shortcode">[bs_pls scan="characterset_meta"]</td>
    </tr>	
    
    <tr valign="top">
        <th class="metabox_label_column">
            <label for="sitemap">Sitemap aanwezig</label>
        </th>
        <td>
            <input type="checkbox" id="sitemap" name="sitemap" <?php if(null !== (get_post_meta($post->ID, 'sitemap', true))) echo 'checked'; ?>/>
        </td>
	<td class="metabox_label_shortcode">[bs_pls scan="sitemap"]</td>
    </tr>
    
    <tr valign="top">
        <th class="metabox_label_column">
            <label for="good_url">Goede url&apos;s</label>
        </th>
        <td>
            <input type="checkbox" id="good_url" name="good_url" <?php if(null !== (get_post_meta($post->ID, 'good_url', true))) echo 'checked'; ?>/>
        </td>
	<td class="metabox_label_shortcode">[bs_pls scan="good_url"]</td>
    </tr>
    
    <tr valign="top">
        <th class="metabox_label_column">
            <label for="good_h1headers">Goede H1 koppen</label>
        </th>
        <td>
            <input type="checkbox" id="good_h1headers" name="good_h1headers" <?php if(null !== (get_post_meta($post->ID, 'good_h1headers', true))) echo 'checked'; ?> />
        </td>
	<td class="metabox_label_shortcode">[bs_pls scan="good_h1headers"]</td>
    </tr>
    
    <tr valign="top">
        <th class="metabox_label_column">
            <label for="breadcrumbs">Breadcrumbs aanwezig</label>
        </th>
        <td>
	    <input type="checkbox" id="breadcrumbs" name="breadcrumbs" <?php if(null !== (get_post_meta($post->ID, 'breadcrumbs', true))) echo 'checked'; ?> />
        </td>
	<td class="metabox_label_shortcode">[bs_pls scan="breadcrumbs"]</td>
    </tr>

    <tr valign="top">
        <th class="metabox_label_column">
            <label for="link_authority">Link authority</label>
        </th>
        <td>
	    <input type="checkbox" id="link_authority" name="link_authority" <?php if(null !== (get_post_meta($post->ID, 'link_authority', true))) echo 'checked'; ?> />
        </td>
	<td class="metabox_label_shortcode">[bs_pls scan="link_authority"]</td>
    </tr>

    <tr valign="top">
        <th class="metabox_label_column">
            <label for="seo_titles">SEO titels</label>
        </th>
        <td>
	    <input type="checkbox" id="seo_titles" name="seo_titles" <?php if(null !== (get_post_meta($post->ID, 'seo_titles', true))) echo 'checked'; ?> />
        </td>
	<td class="metabox_label_shortcode">[bs_pls scan="seo_titles"]</td>
    </tr>

    <tr valign="top">
        <th class="metabox_label_column">
            <label for="meta_descriptions">Meta omschrijvingen teksten</label>
        </th>
        <td>
	    <input type="checkbox" id="meta_descriptions" name="meta_descriptions" <?php if(null !== (get_post_meta($post->ID, 'meta_descriptions', true))) echo 'checked'; ?> />
        </td>
	<td class="metabox_label_shortcode">[bs_pls scan="meta_descriptions"]</td>
    </tr>

    <tr valign="top">
        <th class="metabox_label_column">
            <label for="meta_keywords">Meta keywords</label>
        </th>
        <td>
	    <input type="checkbox" id="meta_keywords" name="meta_keywords" <?php if(null !== (get_post_meta($post->ID, 'meta_keywords', true))) echo 'checked'; ?> />
        </td>
	<td class="metabox_label_shortcode">[bs_pls scan="meta_keywords"]</td>
    </tr>

    <tr valign="top">
        <th class="metabox_label_column">
            <label for="meta_descriptions_images">Meta omschrijving afbeeldingen</label>
        </th>
        <td>
	    <input type="checkbox" id="meta_descriptions_images" name="meta_descriptions_images" <?php if(null !== (get_post_meta($post->ID, 'meta_descriptions_images', true))) echo 'checked'; ?> />
        </td>
	<td class="metabox_label_shortcode">[bs_pls scan="meta_descriptions_images"]</td>
    </tr>

    <tr valign="top">
        <th class="metabox_label_column">
            <label for="text_per_page">Genoeg tekst per pagina</label>
        </th>
        <td>
            <input type="checkbox" id="text_per_page" name="text_per_page" <?php if(null !== (get_post_meta($post->ID, 'text_per_page', true))) echo 'checked'; ?> />
	</td>
	<td class="metabox_label_shortcode">[bs_pls scan="text_per_page"]</td>
    </tr>

    <tr valign="top">
        <th class="metabox_label_column">
            <label for="usability">Usability Score</label>
        </th>
        <td>
            <input type="number" min="1" max="100" id="usability" name="usability" value="<?php echo @get_post_meta($post->ID, 'usability', true); ?>" />   
	</td>
	<td class="metabox_label_shortcode">[bs_pls scan="usability"]</td>
    </tr>
</table>
