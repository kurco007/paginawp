<?php get_header(); ?>
<main>
<?php
    get_template_part('template-part/paginas');
?>
<div class="contenedor seccion zindex">
    <?php trabajos_lista(); ?>
</div>
</main>
<?php get_footer(); ?>
