<section class="carousel">
<img src="/wp-content/uploads/2024/10/free-delivery.png" class="carousel__flash" alt="Free Delivery In The UK">
<div class="carousel__white-panel"></div>
<?php $total_count = count(get_field('slides_small')); ?>
<div class="owl-carousel-main owl-carousel owl-theme <?php if($total_count == 1){ echo "carousel__hide-nav"; } ?>">




<?php if (have_rows('slides')) : ?>
	<?php while (have_rows('slides')) : the_row(); ?>



	<?php $slider_img = get_sub_field('carousel_image'); ?>

		<div class="item carousel__card">
			<div class="carousel__content">
				<span class="carousel__inner">
					<h1 class="carousel__title"><?php the_sub_field('carousel_title'); ?></h1>
					<?php if(get_sub_field('carousel_btn')){ ?>
						<a href="<?php the_sub_field('carousel_btn_link'); ?>" class="button carousel__btn"><?php the_sub_field('carousel_btn'); ?></a>
					<?php } ?>
				</span>
			</div>
		<img class="carousel__img" alt="<?php echo $slider_img['alt']; ?>" src="<?php echo $slider_img['url']; ?>">
		</div>
	<?php endwhile; ?>
<?php endif; ?>

</div>
</section>