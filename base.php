<?php
    use Roots\Sage\Setup;
    use Roots\Sage\Wrapper;
?>
<!doctype html>
<html <?php language_attributes(); ?>>
    
    <?php get_template_part('templates/head'); ?>

    <body <?php body_class(); ?>>
        <div class="grid"></div>
        <div class="inflate">

        <?php
            do_action('get_header');
            get_template_part('templates/header');
        ?>

        <main role="main">
            <?php include Wrapper\template_path(); ?>
        </main>

        <?php if (Setup\display_sidebar()) : ?>
            <aside>
                <?php include Wrapper\sidebar_path(); ?>
            </aside>
        <?php endif; ?>

        <?php
            do_action('get_footer');
            get_template_part('templates/footer');
            wp_footer();
        ?>

        </div>

    </body>

</html>