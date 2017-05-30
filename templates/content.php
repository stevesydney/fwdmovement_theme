<article <?php post_class(); ?>>
    <header>
        <h2 class="entry-title buffer"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <?php get_template_part('templates/entry-meta'); ?>
    </header>
    <section>
        <?php the_excerpt(); ?>
    </section>
</article>
