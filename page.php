<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <div <?php post_class(); ?>>

        <h1 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

        <div class="post_content">
            <?php the_content(); ?>
        </div>

    </div>

<?php endwhile; ?>

<?php else : ?>

    <article id="post-not-found">
        <header>
            <h1>No posts available</h1>
        </header>
        <section class="post_content">
            <p>This section doesn't have any posts yet!</p>
        </section>
    </article>

<?php endif; ?>

<?php get_footer(); ?>