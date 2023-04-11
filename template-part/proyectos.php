<?php
    while( have_posts() ): the_post();
        the_title('<h1 class="text-center text-primary">','</h1>');
        if(has_post_thumbnail()) {
            the_post_thumbnail('full', array('class' => 'imagen-destacada'));
            $tipo_de_proyecto = get_field('proyecto');
        }
        ?>
<div class="contenedor seccion">
<?php
        the_title('<h1 class="text-center text-primary">','</h1>');?>
        <div class="contenidos">
            <p class="informacion">
            Proyecto de <?php echo $tipo_de_proyecto  ?>
            </p>
        <?php the_content();?>
        </div>
    <?php endwhile;