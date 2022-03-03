<?php

/**
 * Template Name: Single Blog Post W/ Sidebar
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package sbh_center
 */

namespace WP_Rig\WP_Rig;

get_header();
get_template_part('template-parts/javascript/navigationJs');
sbh_center()->print_styles('sbh_center-content');

//TOC
get_template_part('template-parts/javascript/tableOfContents');
?>



<?php get_template_part('template-parts/content/googleTranslate'); ?>

<main id="primary" class="site-main single_post_main">

	<div class="page_wrapper">
		<?php

		while (have_posts()) {
			the_post(); ?>
			<div class="post_image">
				<?php
				if (!is_search()) {
					get_template_part('template-parts/content/entry_thumbnail', get_post_type());
				} ?>
			</div>
			<div class="toc_and_content_container">
				<!-- Medical Review -->
				<section class="editor_and_review_section">
					<?php get_template_part('template-parts/content/author-and-medical-review--mobile'); ?>
				</section>

				<section class="page_content">
					<?php the_content(); ?>
				</section>
			</div>


		<?php }
		?>

		<section class="page_disclosure_section">
			<?php get_template_part('template-parts/content/pageDisclaimer'); ?>
		</section>

		<?php get_template_part('template-parts/content/phoneTreatmentCta'); ?>
	</div>
	<?php get_sidebar(); ?>
</main>
<?php

get_footer();
