<?php get_header(); ?>
<?php
    $pagina_blog = get_option( 'page_for_posts' );
    $imagen_id = get_post_thumbnail_id( $pagina_blog );
    $imagen_src = wp_get_attachment_image_src( $imagen_id, 'full')[0];
?>
    <div class="hero" style="background-image: url(<?php echo $imagen_src
    /*** Se implementa para que la imagen principal se posicione y con css se ponga para atras ***/?>);">
            <div class="contenido-hero">
                <h1><?php echo get_the_title($pagina_blog); ?></h1>
            </div>
    </div>

<div class="seccion contenedor con-sidebar">
    <main class="contenedor-principal">
    <?php while(have_posts()): the_post(); ?>
        <article class="entrada-blog">
            <a href="<?php the_permalink(  ); ?>">
                <?php the_post_thumbnail( 'especialidades'); ?>
            </a>

            <header class="informacion-entrada">
                <div class="fecha">
                    <time>
                        <?php echo the_time('d'); ?>
                    </time>
                    <span><?php the_time('M'); ?></span>
                </div>

                <div class="titulo-entrada">
                    <h2> <?php the_title( ); ?> </h2>
                </div>

            </header>
            <p class="autor">
                Escrito por:
                <span>
                    <?php the_author( ); ?>
                </span>
            </p>
            <div class="contenido-entrada">
                <?php the_excerpt(); ?>
                <a class= "boton boton-primario" href="<?php the_permalink(); ?>">Leer Mas</a>
            </div>
        </article>
    <?php endwhile; ?>
    <div class="paginacion">
        <?php next_posts_link( 'Anteriores' ); ?>
        <?php previous_posts_link( 'Siguientes' ); ?>
    </div>
    </main>
        <?php get_sidebar(  ); ?>
</div>
<?php get_footer(); ?>
