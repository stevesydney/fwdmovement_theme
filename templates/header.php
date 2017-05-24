<header role="banner">
    <a href="<?= esc_url(home_url('/')); ?>" title="Home">
        <?php bloginfo('name'); ?>
    </a>
    <nav>
        <?php
            if (has_nav_menu('primary_navigation')) :
                wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
            endif;
        ?>
    </nav>
</header>
