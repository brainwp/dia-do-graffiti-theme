<?php
/* Template name: Homenageado Home */

if ( $hid = kirki_get_option( 'homenageado_id' ) ) : ?>
	<section id="homenageado-home" class="col-sm-4">
		<?php $page = get_post( $hid ); ?>

		<!-- Continua... -->

	</section><!-- #homenageado-home -->
<?php endif; ?>