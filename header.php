<?php 
    /**
     * Header Template File
     */

     global $post;
?>
<!DOCTYPE html>
<html lang="<?php language_attributes( ); ?>">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php 
        $mse_bs_current_page_id = get_queried_object_id();
    ?>
    <header class="mse-bs-header d-flex flex-column justify-content-between" style="background-image: url(<?= esc_url(get_the_post_thumbnail_url($mse_bs_current_page_id, 'full'))?>);background-repeat: no-repeat;
    background-size: cover;background-position: center center;">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <?php 
                        $mse_bs_logo_id = get_theme_mod( 'custom_logo' );
                        $mse_bs_logo = wp_get_attachment_image_src($mse_bs_logo_id, 'full');
                        //var_dump($mse_bs_logo[0]);

                        if (has_custom_logo()) {
                            printf(
                                '<a href="%1$s" class="mse-bs-logo"><img src="%2$s" alt=""></a>',
                                    esc_url(home_url()),
                                    esc_url($mse_bs_logo[0])
                            );
                        } else {

                            printf(
                                '<a href="%1$s" class="mse-bs-logo">%2$s</a>',
                            esc_url(home_url()),
                            esc_html__(get_bloginfo('name', 'mse-book-shop'))
                            );
                   
                        }
                    ?>
                </div>
                
                <div class="col-md-6 d-flex align-items-center justify-content-end">
                    <?php 
                        if (has_nav_menu('primary')) {
                            wp_nav_menu(
                                [
                                    'theme_location' => 'primary',
                                    'container' => 'nav',
                                    'container_class' => 'mse-bs-header-nav',
                                    'menu_class' => 'mse-bs-header-menu',
                                    'depth' => 2,
                                ]
                            );
                        }
                    ?>
                </div>
            </div>
        </div>
        
        <div class="container">
            <div class="row">
                <?php 
                    if (is_home() || is_front_page() || is_page()) {
                        
                ?>
                <div class="col-md-12">
                    <h1 class="mse-bs-page-title text-center"><?php esc_html__(single_post_title(), 'mse-book-shop') ?></h1>          
                </div>
                <?php  }elseif (is_singular()) { ?>
                    <div class="col-md-12">
                        <h1 class="mse-bs-single-page-title text-left"><?php esc_html__(single_post_title(), 'mse-book-shop') ?></h1>
                        <div class="mse-bs-metas mb-2">
                            <span class="mse-bs-post-terms"><?=esc_html__("In: ", "mse-book-shop"); ?> <?php the_category(', '); ?></span>
                            <span class="mse-bs-post-date">
                                <?php 
                                    echo esc_html__('On: ', 'mse-book-shop');
                                    echo esc_html__(get_the_date( 'M d, Y'), 'mse-book-shop');
                                ?>
                            </span>
                            <span class="mse-bs-post-author"><?=esc_html__("By: ", "mse-book-shop"); ?> <a href="<?=esc_url(get_author_posts_url($post->post_author)); ?>"><?php the_author_meta('user_nicename', $post->post_author); ?></a></span>
                        </div>         
                    </div> 
                <?php }else{ ?>
                    
                <?php } ?>
            </div>
        </div>
    </header>
    
