<?php /* Template Name: AH-Wordpress-GiftWrapPage */ ?>

<?php
get_header();
?>


<!-- Owl Carousel -->
<?php require get_template_directory() . '/inc/owl-carousel-small.php'; ?>
<!-- Owl Carousel -->

<!-- Page Builder -->
<?php include(locate_template('./template-parts/page-builder.php')); ?>
<!-- End Page Builder -->

<!-- Special Offers Loop -->
    


<?php
//get_sidebar();
get_footer();
