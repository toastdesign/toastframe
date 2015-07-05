<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package toastframe
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer clearfix" role="contentinfo">

		<div class="container">
			<div id="copyright">
				Copyright teksten en links
			</div><!-- .site-info -->
			
			<div id="toastdesign">
				<a href="http://www.toastdesign.nl">Website door Toast Design</a>
			</div><!-- .site-info -->
		</div>

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<?php echo of_get_option('googlecode'); ?>

</body>
</html>
