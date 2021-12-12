<footer class="l-footer">
            <?php
                $args = array(
                'menu' => 'footermenu',
                'menu_class' => 'l-footer__nav',
                );
                wp_nav_menu( $args );
            ?>
        <small>Copyright: RaiseTech</small>
    </footer>
<?php wp_footer(); ?>
</body>
</html>