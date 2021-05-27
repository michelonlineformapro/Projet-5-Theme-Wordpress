<?php
wp_footer();
?>
</div>
<footer id="the_footer" class="container-fluid mt-5">
    <div class="text-center">
        <h4 class="text-success">NEWSLETTER</h4>
        <?php
        //Appel du fichier newsletter.php
        get_template_part('newsletter')
        ?>
    </div>

    <?php
    /*
        wp_nav_menu([
                'theme_location', 'footer',
                'container' => false,
                'menu_class' => 'navbar-nav me-auto mb-2 mb-lg-0'
        ])
    */
    ?>
</footer>
</body>
</html>
