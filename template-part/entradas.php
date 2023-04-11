<?php
    while( have_posts() ): the_post();

        if(has_post_thumbnail()) {
            the_post_thumbnail('full', array('class' => 'imagen-destacada'));
        }
?>
<div class="contenedor seccion">
<?php
        the_title('<h1 class="text-center text-primary">','</h1>');?>
        <div class="contenidos">
        <?php the_content();?>
        </div>
    <?php endwhile;?>
    </div>