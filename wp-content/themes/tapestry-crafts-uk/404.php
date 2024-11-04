<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Tapestry_Crafts_UK
 */

get_header();
?>




<section class="carousel-small">
<img src="/wp-content/uploads/2024/10/free-delivery.png" class="carousel__flash" alt="Free Delivery In The UK">
<div class="carousel-small__white-panel"></div>
<div class="owl-carousel-main owl-carousel owl-theme carousel-small__hide-nav owl-loaded owl-drag">
<div class="owl-stage-outer">
<div class="owl-stage" style="transform: translate3d(-2612px, 0px, 0px); transition: all; width: 6530px;">
	
	<div class="owl-item active" style="width: 1296px; margin-right: 10px;">
		<div class="item carousel-small__card">
			<div class="carousel-small__content">
				<span class="carousel-small__inner">
					<h1 class="carousel-small__title">Page Not Found</h1>
									</span>
			</div>
		<img class="carousel-small__img" alt="" src="http://localhost:8888/wp-content/uploads/2024/10/home-banner.jpg">
		</div>
	</div>
	
</div>
</div>
<div class="owl-nav disabled">
	<button type="button" role="presentation" class="owl-prev"><img src="/wp-content/themes/tapestry-crafts-uk/dist/img/prev.svg"></button>
	<button type="button" role="presentation" class="owl-next"><img src="/wp-content/themes/tapestry-crafts-uk/dist/img/next.svg"></button>
</div>
<div class="owl-dots disabled"></div>
</div>
</section>



<section class="container text-center four-icons-below-banner" style="padding-top: 30px; padding-bottom: 10px; padding-left: 0px; padding-right: 0px;">
	<div class="column four-column grid-gap-1">
		<div class="column__col">
			<i class="column__icon fas fa-trophy"></i>
				<h3 class="column__heading">Free Shipping</h3>
		</div>

		<div class="column__col">
			<i class="column__icon fas fa-handshake"></i>
				<h3 class="column__heading">Money Back Guarantee</h3>
		</div>

		<div class="column__col">
			<i class="column__icon fas fa-gem"></i>
				<h3 class="column__heading">Quality Of Service</h3>
		</div>

		<div class="column__col">
			<i class="column__icon fas fa-truck-fast"></i>
				<h3 class="column__heading">Fast Delivery</h3>
		</div>
	</div>
</section>






<section class="one-column-grey">
            <div class="grey-zig-zag-panel__border-top"></div>
                <div class="container text-center contact-us" style="padding-top: 0px; padding-bottom: 0px; padding-left: 0vw; padding-right: 0vw;">
                    
                                            <h2 class="column__heading"><?php esc_html_e( 'Oops! That page does not exist.', 'tapestry-crafts-uk' ); ?></h2>
                     

                                            <p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below?', 'tapestry-crafts-uk' ); ?></p>
                        
                    
                    
                    
                </div>
            </section>






	<main id="primary" class="container">

		<section class="error-404 not-found">


			<div class="page-content error404__container">

				<ul class="error404__menu">
					<li class="error404__list"><a class="error404__link" href="/">Home</a></li>
					<li class="error404__list"><a class="error404__link" href="/about/">About Us</a></li>
					<li class="error404__list"><a class="error404__link" href="/categories/">Categories</a></li>
					<li class="error404__list"><a class="error404__link" href="/contact/">Contact Us</a></li>
				</ul>

					<?php
					//get_search_form();
					?>

			</div>
		</section>

	</main>

<?php
get_footer();
