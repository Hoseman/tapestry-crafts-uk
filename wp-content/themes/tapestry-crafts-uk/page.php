<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package AH_Wordpress_Boilerplate
 */

get_header();
?>


<!-- Owl Carousel -->
<?php require get_template_directory() . '/inc/owl-carousel-small.php'; ?>
<!-- Owl Carousel -->

<div class="container">

<?php //if (is_page('499') ) { ?>

	<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
	?>

<?php //} ?>

</div>

<!-- Page Builder -->
<?php include(locate_template('./template-parts/page-builder.php')); ?>
<!-- End Page Builder -->

<?php
//get_sidebar();
get_footer();
