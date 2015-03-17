<?php
/* Template name: barra de newsletter */
$options = get_option('geral_cfg');
?>
<section id="barra-newsletter" class="col-md-12 barra-bg">
	<div class="container">
		<div class="row">
			<h3 class="section-title col-md-4 css-cor">
				<?php echo esc_textarea($options['newsletter_title']);?>
			</h3><!-- .section-title -->
			<div class="col-md-4 text">
				<?php echo esc_textarea($options['newsletter_text']);?>
			</div><!-- .col-md-4 text -->
			<form class="col-md-4" action="<?php echo home_url('/');?>" method="get">
				<input type="text" name="alo_em_opt_email" class="col-md-12" placeholder="<?php _e('E-mail','odin');?>"/>
				<input type="text" name="alo_em_opt_name" class="col-md-10" placeholder="<?php _e('Nome','odin');?>"/>
				<button class="pull-right css-cor"><?php _e('Ok','odin');?></button>
			</form><!-- .col-md-4 -->
		</div><!-- .row -->
	</div><!-- .container -->
</section><!-- #barra-newsletter.col-md-12 barra-bg -->
