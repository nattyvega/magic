<!-- Row for main content area -->
    <div id="content" class="row">

        <div id="main" class="twelve columns" role="main">

            <?php
                /**
                 * Check for the responsive slider plugin
                 */
                if ( class_exists( 'REQ_Orbit' ) ) : ?>

            <div class="home-slider">

            <?php
                /**
                 * Use the shortcode to create the slider
                 */
                echo do_shortcode('[orbit]');
            ?>
            <hr>
            </div>

            <?php endif; ?>

            <div class="post-box">

            <?php if ( have_posts() ) : ?>

                <?php while ( have_posts() ) : the_post(); ?>

                    <?php get_template_part( 'content', get_post_format() ); ?>

                <?php endwhile; ?>

            <?php else : ?>
                <?php get_template_part( 'content', 'none' ); ?>
            <?php endif; ?>

            </div>

        </div><!-- /#main -->
        
<?php if (!is_front_page()) {
get_sidebar();
} ?>
    </div><!-- End Content row -->