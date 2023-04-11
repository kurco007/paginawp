<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head();  ?>
</head>
<body>
<header class="site-header">
    <div class="contenedor">
        <div class="logo">
            <a href="<?php echo esc_url( '/' ); ?> "> <img src="<?php echo get_template_directory_uri() ?>/imgs/logo-blanco.svg" alt=""></a>
        </div>
        
        <div class="menu-principal">
            <div class="contnedor">
                <?php
            $args = array(
            'theme-location' =>  'header-menu',
            'container' => 'nav',
            'container_class' => 'menu-sitio',
            'container_id' => 'menu'
            );
            wp_nav_menu( $args );?>
            </div>
        </div>
        <div class="menu-redes"><?php
                        $args = array(
                            'theme_location' => 'redes-sociales',
                            'container' => 'nav',
                            'container_class' => 'sociales',
                            'link_before' => '<span class="sr-text">',
                            'link_after' => '</span>'
                        );
                        wp_nav_menu( $args );
                    ?>
        </div>
    </div>
    <div class="menu-movil"></div>
</header>
