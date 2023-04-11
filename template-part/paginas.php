
<?php
    $pagina_blog = add_theme_support( 'post-thumbnails' );
    $imagen_id = get_post_thumbnail_id( $pagina_blog );
    $imagen_src = wp_get_attachment_image_src( $imagen_id, 'full')[0];
?>
    <div class="hero" style="background-image: url(<?php echo $imagen_src
    /*** Se implementa para que la imagen principal se posicione y con css se ponga para atras ***/?>);">
            <div class="contenido-hero">
                <h1><?php echo get_the_title($pagina_blog); ?></h1>
            </div>
    </div>

