<?php while (have_posts()) : the_post(); ?>
    <article <?php post_class(); ?>>
        <header class="buffer">
            <h1 class="large"><strong><?php the_title(); ?></strong></h1>
            <?php get_template_part('templates/entry-meta'); ?>
        </header>
        <div class="read">
            <?php the_content(); ?>
        </div>
    </article>
<?php endwhile; ?>
