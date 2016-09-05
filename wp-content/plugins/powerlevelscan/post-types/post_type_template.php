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
            scaled_images,
            optimized_images,
            image_resolution,
            minify_css,
            minify_html,
            minify_javascript,
            parsing_javascript,
            query_strings,
            scripts_styles_order,
            CSS_import,
            combine_css,
            specify_cache,
            configure_browsercache,
            specify_charset,
            bad_requests,
            landingpage_redirects,
            Gzip_compression,
            keep_alive,
            external_javascript,
            redirects,
            size_http_requests,
            CSS_doc_head,
            resources_consistent_url,
            accept_encoding_header,
            CSS_sprites,
            load_asynchronous,
            characterset_meta,
            sitemap,
            good_url,
            good_h1headers,
            breadcrumbs,
            link_authority,
            seo_titles,
            meta_descriptions,
            meta_keywords,
            meta_descriptions_images,
            text_per_page,
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

        function bs_pls_handler($attr)
        {
            // Fetch scan type
            if($attr['scan'] !== 'result')
            {
                $value = get_post_meta(get_the_id(), $attr['scan'], true);
            }
            else
            {
                $value = $this->pls_getCategoryScore($attr['cat']);
            }

            // Fetch graphic type
            switch($attr['type'])
            {
             
                case 'boolean':
                    $output = $value ? get_option("icon_true") : get_option("icon_false");
                    break;
                case 'progress_bar':
                    $output = $this->pls_renderProgressBar($value);
                    break;
                case 'progress_bar_circle':
                    $output = $this->pls_renderProgressBarCircle($value);
                    break;
                case 'text':
                default:
                    $output = $value;
            }

            // Parse shortcodes in shortcode (yo dawg...)
            $output = do_shortcode($output);
            return $output;
        }

        function pls_renderProgressBar($value)
        {
            //echo $value;
            return str_replace('#VALUE#', $value, get_option('progress_bar'));
        }

        function pls_renderProgressBarCircle($value)
        {
            //echo $value;
            $in = get_option('progress_bar_circle');
            return (string)str_replace('#VALUE#', $value, $in);
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
                    update_post_meta($post_id, $field_name, $_POST[$field_name]);
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


//<div id="ccprogress-3" data-dimension="150" data-text="27%" data-info="" data-width="10" data-fontsize="25" data-percent="27" data-fgcolor="#767676" data-bgcolor="#D9D9D9" data-fill="#f9f9f9" data-type="full" data-border="outline" class="circliful" style="width: 150px;"><span class="circle-text" style="line-height: 150px; font-size: 25px;">27%</span><span class="circle-info" style="line-height: 187.5px;"></span><canvas width="150" height="150"></canvas><span class="circle-text" style="line-height: 150px; font-size: 25px;">27%</span><span class="circle-info" style="line-height: 187.5px;"></span><canvas width="150" height="150"></canvas><span class="circle-text" style="line-height: 150px; font-size: 25px;">27%</span><span class="circle-info" style="line-height: 187.5px;"></span><canvas width="150" height="150"></canvas></div>