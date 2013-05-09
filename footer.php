<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WPGroundworkCSS
 */
?>

	</div><!-- #main -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<?php do_action( 'wpgroundworkcss_credits' ); ?>
			<a href="http://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', 'wpgroundworkcss' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'wpgroundworkcss' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'wpgroundworkcss' ), 'WPGroundworkCSS', '<a href="http://www.chrisnorcross.net" rel="designer">Chris Norcross</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<script type="text/javascript">
    // fallback if SVG unsupported
    Modernizr.load({
      test: Modernizr.inlinesvg,
      nope: [
        'css/no-svg.css'
      ]
    });
    // polyfill for HTML5 placeholders
    Modernizr.load({
      test: Modernizr.input.placeholder,
      nope: [
        'css/placeholder_polyfill.css',
        'js/libs/placeholder_polyfill.jquery.js'
      ]
    });
</script>

<?php wp_footer(); ?>

</body>
</html>