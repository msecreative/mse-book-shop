<?php 
    /**
     * Main Template File
     */
?>

<?php 
    get_header();
?>
<div id="primary" class="mse-bs-content-area">
    <main id="main" class="mse-bs-site-main">
        <div class="container">
            <div class="row gy-4">
                <?php 
                    if (have_posts()) {
                        while (have_posts()) {
                            the_post();
                            get_template_part('template-parts/post/content', get_post_format());
                        }
                        ?>
                            <div class="mse-bs-pagination">
                                <?php 
                                    echo paginate_links(
                                        [
                                            'prev_text' => __('Previous', 'mse-book-shop'),
                                            'next_text' => __('Next', 'mse-book-shop'),
                                        ]
                                    );
                                ?>
                            </div>
                        <?php
                    }else{
                        get_template_part('template-parts/post/content', 'none');
                    }
                ?>
            </div>
        </div>
    </main>
</div>
<?php 
    get_footer();
?>