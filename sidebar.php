<div class="l-sidebar__drawer-bg"></div>
    <aside class="l-sidebar">
        <h2>Menu</h2>
        <button class="c-btn--menu-close"><span>close</span></button>
        <?php 
            wp_nav_menu( array( 
                'menu_id' => 'cateogrymenu',
                'menu_class' => 'c-menu',
                'walker'  => new custom_walker_nav_menu
            ) ); 
        ?>
    </aside>