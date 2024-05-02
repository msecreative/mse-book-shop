<?php 
    /**
     * Footer Template File
     */
    
?>

<?php 
    wp_footer();
?>

<footer class="mse-bs-footer-area">
    <?php 
        if (is_active_sidebar('mse-bs-footer-wdg')) {
            dynamic_sidebar('mse-bs-footer-wdg');
        }
    ?>
</footer>


</body>
</html>