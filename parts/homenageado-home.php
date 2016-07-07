<?php
/* Template: Homenageado Home */

if ( $hid = kirki_get_option( 'homenageado_id' ) ) : ?>
	<section id="homenageado-home" class="col-sm-12">

		<div class="col-sm-4">

			<?php
				if ( has_post_thumbnail( $hid ) ) {
					echo '<div class="thumb">';
					echo '<a class="bg-cor" href="#">';
					echo '<div class="bg">';
					echo '</div><!-- bg -->';
					echo '</a>';
					echo get_the_post_thumbnail( $hid, 'full');
					echo '</div><!-- thumb -->';
				}

				_e( 'Photo gallery', 'odin' );
				
				$fotos = get_field( 'galeria_fotos_plupload', $hid );
				foreach ( explode( ',', $fotos ) as $foto_id ) {
				    $img = wp_get_attachment_image_src( $foto_id, 'thumbnail' );
				    $img_full = wp_get_attachment_image_src( $foto_id, 'full' );
				    echo '<a class="" href="' . $img_full[0] . '">';
				    echo '<img src="' . $img[0] . '" width="'. $img[1] .'" height="' . $img[2] . '">';
				    echo '</a>';
				}

				_e( 'External links', 'odin' );

				$links = get_field( 'links_externos', $hid );
				foreach ( explode( '<br />', $links ) as $link ) {
					$link = trim( $link );
					echo '<a class="external-link" href="' . $link . '" target="_blank">';
					echo $link;
					echo '</a>';
				}
			?>
			
		</div>

		<div class="col-sm-8">

			<?php
				$homenageado = get_post( $hid ); 
				echo apply_filters( 'the_content', $homenageado->post_content );
			?>
			
		</div>

	</section><!-- #homenageado-home -->
		























		<?php 

		

		//var_dump($links);


		




		$custom_fields = get_post_custom( $hid );
		foreach ( $custom_fields as $field_key => $field_values ) {
			if(!isset($field_values[0])) continue;
			if(in_array($field_key,array("_edit_lock","_edit_last"))) continue;
		//echo $field_key . '=>' . $field_values[0];
		}
		?>

		<?php //var_dump( $page ); ?>

		<!-- Continua... -->

	


<?php endif; ?>