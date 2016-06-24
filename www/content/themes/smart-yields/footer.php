<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Smart_Yields
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">

			<p class="copyright">Smart Yields &copy; <?php echo date('Y'); ?></p>
			<!-- <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'smart-yields' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'smart-yields' ), 'WordPress' ); ?></a> -->
			<!-- <span class="sep"> | </span> -->
			<!-- <?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'smart-yields' ), 'smart-yields', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?> -->
			<a class="sponsor mixpanel" href="https://mixpanel.com/f/partner" rel="nofollow"><img src="//cdn.mxpnl.com/site_media/images/partner/badge_light.png" alt="Mobile Analytics" /></a>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
