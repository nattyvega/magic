<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <div <?php post_class(); ?>>

        <div class="datebox">
            <span class="datebox_month"><?php the_time('M'); ?></span>
            <span class="datebox_day"><?php the_time('d'); ?></span>
        </div>

        <?php
        if (has_post_thumbnail()) {
            the_post_thumbnail( 'post-thumbnail', array('class' => 'alignleft') );
        }
        ?>

        <h1 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
        <p class="meta">Posted on <?php the_time('l, F jS'); ?> at <?php the_time('ga'); ?> in <?php the_category(', '); ?> / <a href="<?php comments_link(); ?>"><?php comments_number(); ?></a></p>

        <div class="excerpt">
            <?php the_excerpt(); ?>
        </div>

        <a href="<?php the_permalink(); ?>" class="read-more">Keep Reading</a>

    </div>

<?php endwhile; ?>

    <div id="pagination">
        <div class="next_posts_link alignleft">
            <?php next_posts_link('&laquo; Older Posts'); ?>
        </div>
        <div class="previous_posts_link alignright">
            <?php previous_posts_link('Newer Posts &raquo;'); ?>
        </div>
    </div>

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