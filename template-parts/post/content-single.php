<?php 
    /**
     * Content single template
     */
?>

<article id="<?php the_ID() ?>" class="mse-bs-post-article col-sm-12 col-md-12">
    <div class="mse-bs-post-content">
        <?php the_content(); ?>
    </div>
</article>