<table>
    <tr valign="top">
        <th class="metabox_label_column">
            <label for="scaled_images">Gebruik geschaalde afbeeldingen</label>
        </th>
        <td>
            <input type="number" min="1" max="100" id="scaled_images" name="scaled_images" value="<?php echo @get_post_meta($post->ID, 'scaled_images', true); ?>" />
	    [bs_pls scan="scaled_images"]
        </td>
    </tr>
    
    <tr valign="top">
        <th class="metabox_label_column">
            <label for="optimized_images">Gebruik geoptimaliseerde afbeeldingen</label>
        </th>
        <td>
            <input type="number" min="1" max="100" id="optimized_images" name="optimized_images" value="<?php echo @get_post_meta($post->ID, 'optimized_images', true); ?>" />
	    [bs_pls scan="optimized_images"]
        </td>
    </tr>
    <tr valign="top">
        <th class="metabox_label_column">
            <label for="image_resolution">Specificeer de afmetingen van afbeeldingen</label>
        </th>
        <td>
            <input type="number" min="1" max="100" id="image_resolution" name="image_resolution" value="<?php echo @get_post_meta($post->ID, 'image_resolution', true); ?>" />
	    [bs_pls scan="image_resolution"]
        </td>
    </tr>
    
    <tr valign="top">
        <th class="metabox_label_column">
            <label for="minify_css">Minificeer CSS</label>
        </th>
        <td>
            <input type="number" min="1" max="100" id="minify_css" name="minify_css" value="<?php echo @get_post_meta($post->ID, 'minify_css', true); ?>" />
	    [bs_pls scan="minify_css"]
        </td>
    </tr>

    <tr valign="top">
        <th class="metabox_label_column">
            <label for="minify_html">Minificeer HTML</label>
        </th>
        <td>
            <input type="number" min="1" max="100" id="minify_html" name="minify_html" value="<?php echo @get_post_meta($post->ID, 'minify_html', true); ?>" />
	    [bs_pls scan="minify_html"]
        </td>
    </tr>

    <tr valign="top">
        <th class="metabox_label_column">
            <label for="minify_javascript">Minificeer Javascript</label>
        </th>
        <td>
            <input type="number" min="1" max="100" id="minify_javascript" name="minify_javascript" value="<?php echo @get_post_meta($post->ID, 'minify_javascript', true); ?>" />
	    [bs_pls scan="minify_javascript"]
        </td>
    </tr>

    <tr valign="top">
        <th class="metabox_label_column">
            <label for="parsing_javascript">Stel het parsen van Javascript uit</label>
        </th>
        <td>
            <input type="number" min="1" max="100" id="parsing_javascript" name="parsing_javascript" value="<?php echo @get_post_meta($post->ID, 'parsing_javascript', true); ?>" />
	    [bs_pls scan="parsing_javascript"]
        </td>
    </tr>

    <tr valign="top">
        <th class="metabox_label_column">
            <label for="query_strings">Verwijder query strings uit vaste bronnen</label>
        </th>
        <td>
            <input type="number" min="1" max="100" id="query_strings" name="query_strings" value="<?php echo @get_post_meta($post->ID, 'query_strings', true); ?>" />
	    [bs_pls scan="query_strings"]
        </td>
    </tr>

    <tr valign="top">
        <th class="metabox_label_column">
            <label for="scripts_styles_order">Laad scripts en styles op de goede volgorde in</label>
        </th>
        <td>
            <input type="number" min="1" max="100" id="scripts_styles_order" name="scripts_styles_order" value="<?php echo @get_post_meta($post->ID, 'scripts_styles_order', true); ?>" />
	    [bs_pls scan="scripts_styles_order"]
        </td>
    </tr>

    <tr valign="top">
        <th class="metabox_label_column">
            <label for="CSS_import">Voorkomt CSS @import</label>
        </th>
        <td>
            <input type="number" min="1" max="100" id="CSS_import" name="CSS_import" value="<?php echo @get_post_meta($post->ID, 'CSS_import', true); ?>" />
	    [bs_pls scan="CSS_import"]
        </td>
    </tr>

    <tr valign="top">
        <th class="metabox_label_column">
            <label for="combine_css">Combineer externe CSS bestanden</label>
        </th>
        <td>
            <input type="number" min="1" max="100" id="combine_css" name="combine_css" value="<?php echo @get_post_meta($post->ID, 'combine_css', true); ?>" />
	    [bs_pls scan="combine_css"]
        </td>
    </tr>

    <tr valign="top">
        <th class="metabox_label_column">
            <label for="specify_cache">Specificeer cache validatie</label>
        </th>
        <td>
            <input type="number" min="1" max="100" id="specify_cache" name="specify_cache" value="<?php echo @get_post_meta($post->ID, 'specify_cache', true); ?>" />
	    [bs_pls scan="specify_cache"]
        </td>
    </tr>

    <tr valign="top">
        <th class="metabox_label_column">
            <label for="configure_browsercache">Configureer je browsercaching</label>
        </th>
        <td>
            <input type="number" min="1" max="100" id="configure_browsercache" name="configure_browsercache" value="<?php echo @get_post_meta($post->ID, 'configure_browsercache', true); ?>" />
	    [bs_pls scan="configure_browsercache"]
        </td>
    </tr>

    <tr valign="top">
        <th class="metabox_label_column">
            <label for="specify_charset">Specify a character set early</label>
        </th>
        <td>
            <input type="number" min="1" max="100" id="specify_charset" name="specify_charset" value="<?php echo @get_post_meta($post->ID, 'specify_charset', true); ?>" />
	    [bs_pls scan="specify_charset"]
        </td>
    </tr>

    <tr valign="top">
        <th class="metabox_label_column">
            <label for="bad_requests">Voorkom slechte requests</label>
        </th>
        <td>
            <input type="number" min="1" max="100" id="bad_requests" name="bad_requests" value="<?php echo @get_post_meta($post->ID, 'bad_requests', true); ?>" />
	    [bs_pls scan="bad_requests"]
        </td>
    </tr>

    <tr valign="top">
        <th class="metabox_label_column">
            <label for="landingpage_redirects">Voorkom landingspagina redirects</label>
        </th>
        <td>
            <input type="number" min="1" max="100" id="landingpage_redirects" name="landingpage_redirects" value="<?php echo @get_post_meta($post->ID, 'landingpage_redirects', true); ?>" />
	    [bs_pls scan="landingpage_redirects"]
        </td>
    </tr>

    <tr valign="top">
        <th class="metabox_label_column">
            <label for="Gzip_compression">Configureer Gzip compressie</label>
        </th>
        <td>
            <input type="number" min="1" max="100" id="Gzip_compression" name="Gzip_compression" value="<?php echo @get_post_meta($post->ID, 'Gzip_compression', true); ?>" />
	    [bs_pls scan="Gzip_compression"]
        </td>
    </tr>

    <tr valign="top">
        <th class="metabox_label_column">
            <label for="keep_alive">Configureer Keep-Alive</label>
        </th>
        <td>
            <input type="number" min="1" max="100" id="keep_alive" name="keep_alive" value="<?php echo @get_post_meta($post->ID, 'keep_alive', true); ?>" />
	    [bs_pls scan="keep_alive"]
        </td>
    </tr>

    <tr valign="top">
        <th class="metabox_label_column">
            <label for="external_javascript">Combineer externe Javascript bestanden</label>
        </th>
        <td>
            <input type="number" min="1" max="100" id="external_javascript" name="external_javascript" value="<?php echo @get_post_meta($post->ID, 'external_javascript', true); ?>" />
	    [bs_pls scan="external_javascript"]
        </td>
    </tr>	

    <tr valign="top">
        <th class="metabox_label_column">
            <label for="redirects">Verminder redirects</label>
        </th>
        <td>
            <input type="number" min="1" max="100" id="redirects" name="redirects" value="<?php echo @get_post_meta($post->ID, 'redirects', true); ?>" />
	    [bs_pls scan="redirects"]
        </td>
    </tr>	
    
    <tr valign="top">
        <th class="metabox_label_column">
            <label for="size_http_requests">Verminder de grootte van HTTP requests</label>
        </th>
        <td>
            <input type="number" min="1" max="100" id="size_http_requests" name="size_http_requests" value="<?php echo @get_post_meta($post->ID, 'size_http_requests', true); ?>" />
	    [bs_pls scan="size_http_requests"]
        </td>
    </tr>	
    
    <tr valign="top">
        <th class="metabox_label_column">
            <label for="CSS_doc_head">Verplaats CSS bestanden naar de document head</label>
        </th>
        <td>
            <input type="number" min="1" max="100" id="CSS_doc_head" name="CSS_doc_head" value="<?php echo @get_post_meta($post->ID, 'CSS_doc_head', true); ?>" />
	    [bs_pls scan="CSS_doc_head"]
        </td>
    </tr>	
    
    <tr valign="top">
        <th class="metabox_label_column">
            <label for="resources_consistent_url">Laad resources in vanuit een consistente URL</label>
        </th>
        <td>
            <input type="number" min="1" max="100" id="resources_consistent_url" name="resources_consistent_url" value="<?php echo @get_post_meta($post->ID, 'resources_consistent_url', true); ?>" />
	    [bs_pls scan="resources_consistent_url"]
        </td>
    </tr>	
    
    <tr valign="top">
        <th class="metabox_label_column">
            <label for="accept_encoding_header">Specificeer een Vary: Accept-Encoding header</label>
        </th>
        <td>
            <input type="number" min="1" max="100" id="accept_encoding_header" name="accept_encoding_header" value="<?php echo @get_post_meta($post->ID, 'accept_encoding_header', true); ?>" />
	    [bs_pls scan="accept_encoding_header"]
        </td>
    </tr>	
    
    <tr valign="top">
        <th class="metabox_label_column">
            <label for="CSS_sprites">Combineer afbeeldingen doormiddel van CSS sprites</label>
        </th>
        <td>
            <input type="number" min="1" max="100" id="CSS_sprites" name="CSS_sprites" value="<?php echo @get_post_meta($post->ID, 'CSS_sprites', true); ?>" />
	    [bs_pls scan="CSS_sprites"]
        </td>
    </tr>	
    
    <tr valign="top">
        <th class="metabox_label_column">
            <label for="load_asynchronous">Laad asynchroon vanuit verschillende bronnen</label>
        </th>
        <td>
            <input type="number" min="1" max="100" id="load_asynchronous" name="load_asynchronous" value="<?php echo @get_post_meta($post->ID, 'load_asynchronous', true); ?>" />
	    [bs_pls scan="load_asynchronous"]
        </td>
    </tr>	
    
    <tr valign="top">
        <th class="metabox_label_column">
            <label for="characterset_meta">Voorkom een character set in de meta tag</label>
        </th>
        <td>
            <input type="number" min="1" max="100" id="characterset_meta" name="characterset_meta" value="<?php echo @get_post_meta($post->ID, 'characterset_meta', true); ?>" />
	    [bs_pls scan="characterset_meta"]
        </td>
    </tr>	
    
    <tr valign="top">
        <th class="metabox_label_column">
            <label for="sitemap">Sitemap aanwezig</label>
        </th>
        <td>
            <input type="checkbox" id="sitemap" name="sitemap" <?php if(null !== (get_post_meta($post->ID, 'sitemap', true))) echo 'checked'; ?>/>
	    [bs_pls scan="sitemap"]
        </td>
    </tr>
    
    <tr valign="top">
        <th class="metabox_label_column">
            <label for="good_url">Goede url&apos;s</label>
        </th>
        <td>
            <input type="checkbox" id="good_url" name="good_url" <?php if(null !== (get_post_meta($post->ID, 'good_url', true))) echo 'checked'; ?>/>
	    [bs_pls scan="good_url"]
        </td>
    </tr>
    
    <tr valign="top">
        <th class="metabox_label_column">
            <label for="good_h1headers">Goede H1 koppen</label>
        </th>
        <td>
            <input type="checkbox" id="good_h1headers" name="good_h1headers" <?php if(null !== (get_post_meta($post->ID, 'good_h1headers', true))) echo 'checked'; ?> />
	    [bs_pls scan="good_h1headers"]
        </td>
    </tr>
    
    <tr valign="top">
        <th class="metabox_label_column">
            <label for="good_404">Goede 404 pagina</label>
        </th>
        <td>
	    <input type="checkbox" id="good_404" name="good_404" <?php if(null !== (get_post_meta($post->ID, 'good_404', true))) echo 'checked'; ?> />
	    [bs_pls scan="good_404"]
        </td>
    </tr>
</table>
