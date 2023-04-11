<footer class="site-footer">
    <?php
            $args = array(
            'theme-location' =>  'header-menu',
            'container' => 'nav',
            'container_class' => 'footer-nav',
            'after' => '<span class="separador">|</span>'
            );
            wp_nav_menu( $args );
        ?>

</footer>
<?php wp_footer();  ?>
</body>
</html>