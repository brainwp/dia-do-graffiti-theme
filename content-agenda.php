<?php
/*Template name: content agenda */
$data_inicio = DateTime::createFromFormat('Ymd',get_post_meta( get_the_ID(), 'data_inicio', true ));
?>
<a href="<?php the_permalink();?>" class="col-md-3 date">
	<h4><?php echo $data_inicio->format('d'); ?></h4>
	<small><?php echo $data_inicio->format('F'); ?></small>
</a><!-- .col-md-3 date -->
<a href="<?php the_permalink();?>" class="col-md-9 pull-right local">
	<h4><?php the_title();?></h4>
	<small><?php echo get_post_meta(get_the_ID(),'local',true);?></small>
</a><!-- .col-md-9 pull-right local -->
<div class="col-md-12 separator"></div><!-- .col-md-12 separator -->
