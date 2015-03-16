<?php
/* Template name: Home */
get_header('home');
$options = get_option('home_cfg');
?>
<section id="infos-home" class="col-md-12">
	<div class="container">
		<div class="row">
			<div class="col-md-4 site-description">
				<h3><?php echo esc_textarea($options['content_title']);?></h3>
				<p><?php echo esc_textarea($options['content_text']);?></p>
			</div><!-- .col-md-4 site-description -->
		</div><!-- .row -->
	</div><!-- .container -->
</section><!-- #infos-home -->
<?php
get_footer('home');
?>
