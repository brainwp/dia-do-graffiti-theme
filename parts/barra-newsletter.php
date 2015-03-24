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
				<?php
				$istance = array( "title" => "Newsletter");
				$args = array();
				the_widget("ALO_Easymail_Widget", $istance, $args );
				?>
			</form><!-- .col-md-4 -->
		</div><!-- .row -->
	</div><!-- .container -->
</section><!-- #barra-newsletter.col-md-12 barra-bg -->
