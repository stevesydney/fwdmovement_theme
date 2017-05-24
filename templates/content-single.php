<?php while (have_posts()) : the_post(); ?>
    <article <?php post_class(); ?>>
        <header>
            <h1 class="large"><?php the_title(); ?></h1>
            <?php get_template_part('templates/entry-meta'); ?>
        </header>
        <?php the_content(); ?>
    </article>
<?php endwhile; ?>
