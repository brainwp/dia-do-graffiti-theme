<?php if(is_front_page() || is_home()):?>
	<h3 class="col-md-4 section-title pull-left">
		<?php _e('Notícias','odin');?>
	</h3>
<?php endif;?>
<?php if(is_category()):?>
	<h3 class="col-md-5 section-title pull-left">
		<?php single_cat_title(__('Categoria&nbsp;','odin')); ?>
	</h3>
<?php endif;?>
<div class="col-md-6 pull-right categories">
	<?php $categories = get_categories( array('parent' => 0) ); ?>
	<?php foreach($categories as $cat): ?>
		<a href="<?php echo get_category_link($cat->term_id);?>">
			<?php echo $cat->name;?>
		</a>
	<?php endforeach; ?>
	<?php if(!is_home()):?>
		<a href="<?php echo esc_url(odin_get_post_archive());?>">
			<?php _e('Ver todos','odin');?>
		</a>
	<?php endif;?>
</div><!-- .col-md-9 pull-right categories -->
<div class="col-md-12 clear"></div><!-- .col-md-12 clear -->
