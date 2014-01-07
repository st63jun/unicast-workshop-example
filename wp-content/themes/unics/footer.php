<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
	</div><!-- #main .wrapper -->
	<footer id="colophon" role="contentinfo">
        <nav>
          <ul id="footer-nav">
            <li><a href="<?php bloginfo('url'); ?>/?page_id=38">活動</a></li>
            <li><a href="<?php bloginfo('url'); ?>/?page_id=39">UNICSとは</a></li>
            <li><a href="<?php bloginfo('url'); ?>/?page_id=40">部員</a></li>
            <li><a href="<?php bloginfo('url'); ?>/?page_id=41">ギャラリー</a></li>
          </ul>
        </nav>
		<div class="site-info">
			<?php do_action( 'twentytwelve_credits' ); ?>
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'twentytwelve' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'twentytwelve' ); ?>"><?php printf( __( 'Proudly powered by %s', 'twentytwelve' ), 'WordPress' ); ?></a>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>