<?php
/* Template name: Home */
get_header('home');
$options = get_option('home_cfg');
?>
<?php get_template_part('/parts/infos-home'); ?>
<?php get_template_part('/parts/noticias-home'); ?>
<?php get_template_part('/parts/barra-newsletter'); ?>
<?php
get_footer('home');
?>
