<?php
function ah65_owl_carousel() {

		$output = '<section class="carousel">';


		$output .= '<img src="/wp-content/uploads/2024/10/free-delivery.png" class="carousel__flash" alt="Free Delivery In The UK">';
		$output .= '<div class="carousel__white-panel"></div>';

		$output .= '<div class="owl-carousel-main owl-carousel owl-theme">';
				// slide one
				$output .= '<div class="item carousel__card">';

					$output .= '<div class="carousel__content">';

						$output .= '<span class="carousel__inner">';
						$output .= '<h1 class="carousel__title">Tapestry Kits Sent Freepost in the UK</h1>';
						$output .= '<a href="/shop/" class="button carousel__btn">Shop Now</a>';
						$output .= '</span>';

					$output .= '</div>';

				$output .= '<img class="carousel__img" alt="Slider 1" src="/wp-content/uploads/2024/10/home-banner.jpg">';
				$output .= '</div>';
				// slide one

				// slide two
				$output .= '<div class="item carousel__card">';

					$output .= '<div class="carousel__content">';

						$output .= '<span class="carousel__inner">';
						$output .= '<h1 class="carousel__title">The Best Online Resource For Tapestry Kits</h1>';
						$output .= '<a href="/shop/" class="button carousel__btn">Shop Now</a>';
						$output .= '</span>';

					$output .= '</div>';

				$output .= '<img class="carousel__img" alt="Slider 1" src="/wp-content/uploads/2024/10/home-banner.jpg">';
				$output .= '</div>';
				// slide two
		$output .= '</div>';



		$output .= '</section>';
		return $output;
}
add_shortcode('owl_carousel', 'ah65_owl_carousel');