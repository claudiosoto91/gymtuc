    <footer class="footer contenedor">    
        <hr>
        <div class="contenido-footer">
            <?php 
                    $args = array(
                        'theme-location' => 'menu-principal',
                        'container' => 'nav',
                        'container_class' => 'menu-principal'
                    );
                    wp_nav_menu($args);
            ?>
            <p class="copyright">Todos los Derechos Reservados. <?php echo get_bloginfo() . " " . date('Y')?></p>
        </div>
    </footer>

    <?php wp_footer();?>
</body>
</html>