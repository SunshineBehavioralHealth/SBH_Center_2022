<?php

/**
 * The template for displaying 500 pages (internal server errors)
 *
 * @link https://github.com/xwp/pwa-wp#offline--500-error-handling
 *
 * @package sbh_center
 */

namespace WP_Rig\WP_Rig;

get_header();

sbh_center()->print_styles('sbh_center-content');

?>
<main id="primary" class="site-main">
	<?php get_template_part('template-parts/content/error', '500'); ?>
</main>
<?php
get_footer();