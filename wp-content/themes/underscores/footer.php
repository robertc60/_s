<?php
?>

</div>

<div id="colophon" class="site-footer" role="contentinfo">
<div class="footer"
    <nav class="social-menu">
        <?php wp_nav_menu(array('theme_location' => 'footer')); ?>
    </nav>

    <div class="site-info">
        <a href="<?php echo esc_url(__('https://wordpress.org/', 'underscores')); ?>"><?php printf(esc_html__('Proudly powered by %s', 'underscores'), 'WordPress'); ?></a>
        <span class="sep"> | </span>
        <?php printf(esc_html__('Theme: %1$s by %2$s.', 'underscores'), 'underscores', '<a href="https://mor10.com/courses" rel="designer">Robert Clarkson</a>'); ?>
    </div><!-- .site-info -->
    </div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
