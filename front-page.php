<?php
/* Template name: Home */
get_header('home');
$options = get_option('home_cfg');
?>
<section id="infos-home" class="col-md-12">
	<div class="container">
		<div class="row">
			<div class="col-md-4 site-description">
				<h3 class="css-cor"><?php echo esc_textarea($options['content_title']);?></h3>
				<p><?php echo esc_textarea($options['content_text']);?></p>
			</div><!-- .col-md-4 site-description -->
			<div class="col-md-4 links-rapidos">
				<a class="bg-cor" href="<?php echo esc_url($options['link_1_url']);?>">
					<?php echo esc_textarea($options['link_1_title']);?>
				</a>
				<a class="bg-cor" href="<?php echo esc_url($options['link_2_url']);?>">
					<?php echo esc_textarea($options['link_2_title']);?>
				</a>
				<a class="bg-cor" href="<?php echo esc_url($options['link_3_url']);?>">
					<?php echo esc_textarea($options['link_3_title']);?>
				</a>
			</div><!-- .col-md-4 links-rapidos -->
			<div class="col-md-4 agenda">
				<header class="col-md-12">
					<h3 class="col-md-8 pull-left"><?php _e('Agenda de Ações','odin');?></h3>
					<span class="pull-right bg-cor"><?php _e('Todas','odin');?></span>
				</header>
			</div><!-- .col-md-4 agenda -->
		</div><!-- .row -->
	</div><!-- .container -->
</section><!-- #infos-home -->
<?php
get_footer('home');
?>
