<?php /* Template Name: AH-Wordpress-CategoriesPage */ ?>

<?php
get_header();
?>


<!-- Owl Carousel -->
<?php require get_template_directory() . '/inc/owl-carousel-small.php'; ?>
<!-- Owl Carousel -->


<!-- Page Builder -->
<?php include(locate_template('./template-parts/page-builder.php')); ?>
<!-- End Page Builder -->

<section class="categories">
    <div class="container">
        <?php $short = "[product_categories]"; ?>
        <?php echo do_shortcode($short); ?>
    </div>
</section>



<?php
//get_sidebar();
get_footer();
