<?php /* Template Name: AH-Wordpress-HomePage */ ?>

<?php
get_header();
?>

<!-- Owl Carousel -->
<?php require get_template_directory() . '/inc/owl-carousel.php'; ?>
<!-- Owl Carousel -->



<!-- Page Builder -->
<?php include(locate_template('./template-parts/page-builder.php')); ?>
<!-- End Page Builder -->


<?php
//get_sidebar();

get_footer();
