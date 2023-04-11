<?php get_header(); ?>
<?php
    get_template_part('template-part/paginas');
?>
<div class="contenedor seccion">
    <div class="contacto espacio">
        <?php
    while( have_posts() ): the_post();
?>
        <div class="contenidos">
        <?php the_content();?>
        </div>
    <?php endwhile;?>
    </div>
    </div>
</div>
<?php get_footer(); ?>

