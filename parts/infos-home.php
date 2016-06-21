<?php
/* Template name: Infos home */
?>
<section id="infos-home" class="col-md-12">
	
	<div class="container">
		<div class="row">

			<div class="col-sm-12 site-description">
				<?php
					$blog_details = get_blog_details( get_current_blog_id() );
					if ( ! empty( $blog_details ) ) {
						echo '<h1>';
						echo basename ( $blog_details->siteurl );
						echo '</h1>';
					}
				?>
				<?php if ( $desc = kirki_get_option( 'home_site_description' ) ) : ?>
					<p><?php echo apply_filters( 'the_content', esc_textarea( $desc ) ); ?></p>
				<?php endif; ?>
			</div><!-- site-description -->

		</div><!-- .row -->
	</div><!-- .container -->

</section><!-- #infos-home -->
