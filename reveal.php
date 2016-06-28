<?php
/*Template name: Reveal Modal */
if ( have_posts() ) :
	if ( 'curadores' == get_post_type() ) {
		get_template_part( 'content-modal', 'curadores' );
	} else {
		get_template_part( 'content-modal', 'default' );
	}
endif;