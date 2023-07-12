<?php

/**
 * Template Name: Listado de Clases
 */
?>
<?php get_header(); ?>
<main class="contenedor seccion">
    <?php
    get_template_part('template-parts/pagina');
    ?>
    <?php gymtuc_lista_clases(); ?>
</main>
<?php get_footer(); ?>