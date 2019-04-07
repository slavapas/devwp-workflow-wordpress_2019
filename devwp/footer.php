<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package devWP
 */

?>

	</div><!-- #content -->

	<footer id="footer" class="site-footer container">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'devwp' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'devwp' ), 'Pascar' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'devwp' ), 'devwp', '<a href="http://underscores.me/">slavapas</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->
<a href="javascript:" id="return-to-top"><i class="fa fa-icon-chevron-up"></i></a>
<?php wp_footer(); ?>

</body>
</html>
