<?php get_header(); ?>
<main>
    <div class="waviy">
        <h1>
        <span style="--i:1">B</span>
        <span style="--i:2">i</span>
        <span style="--i:3">e</span>
        <span style="--i:4">n</span>
        <span style="--i:5">v</span>
        <span style="--i:6">e</span>
        <span style="--i:7">n</span>
        <span style="--i:8">i</span>
        <span style="--i:9">d</span>
        <span style="--i:10">o</span>
        <span style="--i:11">s</span>
        <span style="--i:12">.</span>
        </h1>
    </div>
<!---<div class="espacio-presentacion">
    <h1 class="texto">Hola soy Kurt, un</h1>
    <h1 id="typing" class="typing" > </h1>
</div> --->
<div class="contenedor-front seccion-front ">
    <div class="proyectos">
        <div class="titulo"><h3>Proyectos</h3></div>
        <?php proyectos_lista(4); ?>
        <button class="boton boton-3">
            <a href="/proyectos">Ver Mas</a>
        </button>
    </div>
    <div class="lista">
        <div class="titulo"><h3>Trabajos</h3></div>
            <?php trabajos_lista(4); ?>
        <button class="boton boton-3">
            <a href="/trabajos">Ver Mas</a>
        </button>
    </div>
</div>
</main><?php get_footer(); ?>