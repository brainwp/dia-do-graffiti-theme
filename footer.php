<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main div element.
 *
 * @package Odin
 * @since 2.2.0
 */
?>

<?php if ( $hashtag = get_theme_mod( 'link_hashtag' ) ): ?>
	<a href="<?php echo $hashtag; ?>">
		<div class="hashtag bg-cor">
			<?php if ( $title_hashtag = get_theme_mod( 'title_hashtag' ) ): ?>
				<h2><?php echo $title_hashtag; ?></h2>
			<?php endif; ?>
		</div><!-- hashtag -->
	</a>
<?php endif; ?>

<footer id="footer-creditos" class="col-md-12">
	<div class="container">
		<div class="row">
			<div class="col-md-4 pull-left">
				<div class="col-md-12">
					<?php _e('Alguns direitos reservados','odin');?>
					<img src="<?php bloginfo('template_url');?>/assets/images/cc-icon.png">
				</div><!-- .col-md-12 -->
				<div class="col-md-12">
					<?php _e('Desenvolvido com','odin');?>
					<img src="<?php bloginfo('template_url');?>/assets/images/wp-icon.png">
				</div><!-- .col-md-12 -->
			</div><!-- .col-md-4 -->
			<div class="col-md-8 pull-right logos">
				<a href="http://www.acaoeducativa.org.br/" class="ae" target="_blank"></a>
				<a href="http://www.brasa.art.br" class="brasa" target="_blank"></a>
			</div><!-- .col-md-8 pull-right -->
		</div><!-- .row -->
	</div><!-- .container -->
</footer><!-- #footer -->
<?php wp_footer(); ?>
</body>
</html>
