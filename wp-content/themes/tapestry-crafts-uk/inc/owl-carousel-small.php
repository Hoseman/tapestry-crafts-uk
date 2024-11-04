<section class="carousel-small">
<img src="/wp-content/uploads/2024/10/free-delivery.png" class="carousel__flash" alt="Free Delivery In The UK">
<div class="carousel-small__white-panel"></div>
<?php $slides = get_field('slides_small'); ?>
<?php $total_count = is_array($slides) ? count($slides) : 0; ?>
<div class="owl-carousel-main owl-carousel owl-theme <?php if($total_count == 1){ echo "carousel-small__hide-nav"; } ?>">




<?php if ($total_count > 0) : ?>
	<?php while (have_rows('slides_small')) : the_row(); ?>



	<?php $slider_img = get_sub_field('carousel_small_image'); ?>

		<div class="item carousel-small__card">
			<div class="carousel-small__content">
				<span class="carousel-small__inner">
					<h1 class="carousel-small__title"><?php the_sub_field('carousel_small_title'); ?></h1>
					<?php if(get_sub_field('carousel_small_btn')){ ?>
						<a href="<?php the_sub_field('carousel_small_btn_link'); ?>" class="button carousel-small__btn"><?php the_sub_field('carousel_small_btn'); ?></a>
					<?php } ?>
				</span>
			</div>
		<img class="carousel-small__img" alt="<?php echo $slider_img['alt']; ?>" src="<?php echo $slider_img['url']; ?>">
		</div>
	<?php endwhile; ?>
<?php endif; ?>

</div>
</section>