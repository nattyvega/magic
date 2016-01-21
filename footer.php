</main>

<?php get_sidebar(); ?>

</div> <!-- end .clear -->

<!-- Footer widget area -->
<div id="footer_widgets">

    <?php if (is_active_sidebar('footer_area_1')) : ?>
    <div class="one_third">
        <?php dynamic_sidebar('footer_area_1'); ?>
    </div>
    <?php endif; ?>

    <?php if (is_active_sidebar('footer_area_2')) : ?>
        <div class="one_third">
            <?php dynamic_sidebar('footer_area_2'); ?>
        </div>
    <?php endif; ?>

    <?php if (is_active_sidebar('footer_area_3')) : ?>
        <div class="one_third">
            <?php dynamic_sidebar('footer_area_3'); ?>
        </div>
    <?php endif; ?>

</div>

<p id="copyright">Copyright &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>.

</div> <!-- end #wrapper -->

<?php wp_footer(); ?>

</body>

</html>