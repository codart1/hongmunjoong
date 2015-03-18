<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package dazzling
 */

get_header(); ?>
	<div class="top-section">

		<?php dazzling_featured_slider(); ?>

		<?php dazzling_call_for_action(); ?>
	</div>

	<?php echo get_template_part( 'hmj-partials/main' ); ?>
	<?php echo get_template_part( 'hmj-partials/social' ); ?>
	<?php echo get_template_part( 'hmj-partials/activities' ); ?>
	<?php echo get_template_part( 'hmj-partials/news' ); ?>
	<?php echo get_template_part( 'hmj-partials/think' ); ?>

<?php //get_sidebar(); ?>
<?php get_footer("hmj-footer"); ?>