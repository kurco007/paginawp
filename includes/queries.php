<?php

function proyectos_lista($cantidad = -1) {
    ?>

        <ul class="listado-grid">
            <?php 
                $args = array(
                    'post_type' => 'proyectos_posts',
                    'posts_per_page' => $cantidad
                );
                $clases = new WP_Query($args);
                while($clases->have_posts()) {
                    $clases->the_post();
                ?>
                    <li class="card">
                        <?php the_post_thumbnail(); ?>
                        <div class="box">
                            <div class="contenido">
                            <a href="<?php the_permalink(); ?>">
                                <h3><?php the_title(); ?></h3>
                            </a>
                            <?php
                                $tipo_de_proyecto = get_field('proyecto');
                            ?>

                            <p>
                            Proyecto de  <?php echo $tipo_de_proyecto; ?>
                            </p>
                            </div>
                        </div>
                    </li>
            <?php 
                }
                wp_reset_postdata();
            ?>
        </ul>
    <?php
}
function trabajos_lista($cantidad = -1) {
    ?>

        <ul class="listado-grid">
            <?php
                $args = array(
                    'post_type' => 'trabajos_posts',
                    'posts_per_page' => $cantidad
                );
                $clases = new WP_Query($args);
                while($clases->have_posts()) {
                    $clases->the_post();
                ?>
                    <li class="card">
                        <?php the_post_thumbnail(); ?>
                        <div class="box">
                            <div class="contenido">
                            <a href="<?php the_permalink(); ?>">
                                <h3><?php the_title(); ?></h3>
                            </a>
                                <?php
                                $tipo_de_trabajo = get_field('trabajo');
                                $tipo_de_proyecto = get_field('proyecto')
                            ?>

                            <p>
                            Trabajo:  <?php echo $tipo_de_trabajo; ?>    |
                            Proyecto de <?php echo $tipo_de_proyecto; ?>
                            </p>
                            </div>
                        </div>
                    </li>
            <?php 
                }
                wp_reset_postdata();
            ?>
        </ul>
    <?php
}
