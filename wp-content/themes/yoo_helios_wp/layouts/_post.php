<?php if ($this['config']->get('article')=='tm-article-blog') : ?>

    <article id="item-<?php the_ID(); ?>" class="uk-article tm-article" data-permalink="<?php the_permalink(); ?>">

        <?php if (has_post_thumbnail()) : ?>
            <?php
            $image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
            $width = get_option('thumbnail_size_w'); //get the width of the thumbnail setting
            $height = get_option('thumbnail_size_h'); //get the height of the thumbnail setting
            ?>
            <div class="tm-article-image uk-flex uk-flex-middle uk-flex-center tm-contrast" style="background:url(<?php echo $image; ?>);">

                <?php if(comments_open() || get_comments_number()) : ?>
                    <div class="tm-article-comment"><?php comments_popup_link(__('0', 'warp'), __('1', 'warp'), __('%', 'warp'), "", ""); ?></div>
                <?php endif; ?>

                <div class="uk-text-center">

                    <h1 class="uk-article-title tm-article-title"><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>

                    <p class="uk-article-meta tm-article-meta">
                        <?php
                            $date = '<time datetime="'.get_the_date('Y-m-d').'">'.get_the_date().'</time>';
                            printf(__('Written by %s on %s. Posted in %s', 'warp'), '<a href="'.get_author_posts_url(get_the_author_meta('ID')).'" title="'.get_the_author().'">'.get_the_author().'</a>', $date, get_the_category_list(', '));
                        ?>
                    </p>

                    <a class="tm-article-more uk-button uk-button-large" href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php _e('Continue Reading', 'warp'); ?></a>

                    <?php edit_post_link(__('Edit this post.', 'warp'), '<p class="tm-article-edit"><i class="uk-icon-pencil"></i> ','</p>'); ?>

                </div>
            </div>

        <?php else : ?>

            <div class="tm-article-image uk-flex uk-flex-middle uk-flex-center tm-contrast">

                <?php if(comments_open() || get_comments_number()) : ?>
                    <div class="tm-article-comment"><?php comments_popup_link(__('0', 'warp'), __('1', 'warp'), __('%', 'warp'), "", ""); ?></div>
                <?php endif; ?>

                <div class="uk-text-center">

                    <h1 class="uk-article-title tm-article-title"><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>

                    <p class="uk-article-meta tm-article-meta">
                        <?php
                            $date = '<time datetime="'.get_the_date('Y-m-d').'">'.get_the_date().'</time>';
                            printf(__('Written by %s on %s. Posted in %s', 'warp'), '<a href="'.get_author_posts_url(get_the_author_meta('ID')).'" title="'.get_the_author().'">'.get_the_author().'</a>', $date, get_the_category_list(', '));
                        ?>
                    </p>

                    <a class="tm-article-more uk-button uk-button-large" href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php _e('Continue Reading', 'warp'); ?></a>

                    <?php edit_post_link(__('Edit this post.', 'warp'), '<p class="tm-article-edit"><i class="uk-icon-pencil"></i> ','</p>'); ?>

                </div>
            </div>

        <?php endif; ?>

    </article>

<?php else : ?>

    <article id="item-<?php the_ID(); ?>" class="uk-article" data-permalink="<?php the_permalink(); ?>">

        <?php if (has_post_thumbnail()) : ?>
            <?php
            $width = get_option('thumbnail_size_w'); //get the width of the thumbnail setting
            $height = get_option('thumbnail_size_h'); //get the height of the thumbnail setting
            ?>
            <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail(array($width, $height), array('class' => '')); ?></a>
        <?php endif; ?>

        <h1 class="uk-article-title"><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>

        <p class="uk-article-meta">
            <?php
                $date = '<time datetime="'.get_the_date('Y-m-d').'">'.get_the_date().'</time>';
                printf(__('Written by %s on %s. Posted in %s', 'warp'), '<a href="'.get_author_posts_url(get_the_author_meta('ID')).'" title="'.get_the_author().'">'.get_the_author().'</a>', $date, get_the_category_list(', '));
            ?>
        </p>

        <?php the_content(''); ?>

        <ul class="uk-subnav uk-subnav-line">
            <li><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php _e('Continue Reading', 'warp'); ?></a></li>
            <?php if(comments_open() || get_comments_number()) : ?>
                <li><?php comments_popup_link(__('No Comments', 'warp'), __('1 Comment', 'warp'), __('% Comments', 'warp'), "", ""); ?></li>
            <?php endif; ?>
        </ul>

        <?php edit_post_link(__('Edit this post.', 'warp'), '<p><i class="uk-icon-pencil"></i> ','</p>'); ?>

    </article>

<?php endif; ?>