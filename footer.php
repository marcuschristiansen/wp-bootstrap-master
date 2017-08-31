<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wp_starter
 */

?>

<footer>
	<div class="container">
		<div class="row">

			<div class="col-md-3">
				<?php dynamic_sidebar('footer-sidebar-1'); ?>
			</div>
			<div class="col-md-8 ml-auto">
				<div class="row">
					<div class="col-md-3">
						<?php dynamic_sidebar('footer-sidebar-2'); ?>
					</div>
					<div class="col-md-3">
						<?php dynamic_sidebar('footer-sidebar-3'); ?>	
					</div>
					<div class="col-md-3">
						<?php dynamic_sidebar('footer-sidebar-4'); ?>
					</div>
					<div class="col-md-3">
						<?php dynamic_sidebar('footer-sidebar-5'); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>


<?php wp_footer(); ?>

</body>
</html>
