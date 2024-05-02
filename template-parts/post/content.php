<?php 
    /**
     * Post loop content template
     */
    
?>

<article id="post-<?php the_ID(); ?>" class="mse-bs-article col-md-4 col-sm-12">
    <figure class="mse-bs-post-thumbnail">
        <?php the_post_thumbnail('medium-large'); ?>
    </figure>
    <div class="mse-bs-post-content">
        <h4 class="mse-bs-post-title text-capitalize">
            <a href="<?php the_permalink(); ?>"><?php the_title() ?></a>
        </h4>
        <div class="mse-bs-metas d-flex justify-content-between mb-2">
            <span class="mse-bs-post-terms"><?=esc_html__("In: ", "mse-book-shop"); ?> <?php the_category(', '); ?></span>
            <?php the_date( 'M d, Y', '<span class="mse-bs-post-date">On: ', '</span>' ); ?>
            <span class="mse-bs-post-author"><?=esc_html__("By: ", "mse-book-shop"); ?> <?php the_author(); ?></span>
        </div>
        <div class="mse-bs-post-excerpt mb-2">
        <?php echo wp_kses_post(wp_trim_words(get_the_excerpt(), 15)); ?>
        </div>
        <a href="<?php the_permalink(); ?>" class="mse-bs-post-read-more"><?=esc_html__("Read More", "mse-book-shop"); ?></a>
    </div>
</article>