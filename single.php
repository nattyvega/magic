<?php get_header(); ?>

    <main id="main" class="col-md-8" role="main">

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <div <?php post_class(); ?>>

                <h1 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                <p class="meta">Posted on <?php the_date(); ?> in <?php the_category(', '); ?> / <a href="<?php comments_link(); ?>"><?php comments_number(); ?></a></p>

                <?php
                /*
                 * This will display the full featured image and center it. This is optional. You may want to remove it.
                 */
                if (has_post_thumbnail()) {
                    the_post_thumbnail( 'full', array('class' => 'aligncenter') );
                }
                ?>

                <div class="post_content">
                    <?php the_content(); ?>
                </div>

                <?php echo get_the_tag_list('<p>Tags: ',', ','</p>'); ?>

            </div>

            <?php comments_template(); ?>

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

    </main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>