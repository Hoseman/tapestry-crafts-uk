<?php /* Template Name: AH-Wordpress-SpecialOffersPage */ ?>

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


            <section class="popular-products">
            <div class="container">
            <!-- <h2 class="popular-products__heading">Discounted Offers While Stocks Last</h2>
            <div class="green-underline"></div>  -->
            
            

            <?php
            // Define WooCommerce product query arguments
            $args = array(
                'post_type' => 'product',
                'posts_per_page' => -1,
                'meta_key' => 'total_sales',
                'orderby' => 'meta_value_num',
                'order' => 'DESC',  
                'meta_query' => array(
                    array(
                        'key' => '_sale_price',
                        'value' => '',
                        'compare' => '!=', // Only products with a sale price
                    ),
                ),
            );

            // Query WooCommerce products
            $loop = new WP_Query($args);

            if ($loop->have_posts()) : ?>
            
                <div class="popular-products__grid">

            

                    <?php while ($loop->have_posts()) : $loop->the_post();
                        global $product; ?>
                        <div class="popular-products__card">

                                <?php  if ($product->is_on_sale()) { ?>
                                    <div class="popular-products__banner">Sale!</div>
                                <?php } ?>

                                <span class="popular-products__price">
                                    <?php 
                                        if ($product->is_on_sale()) {
                                            echo wc_price($product->get_sale_price()); // Show only the sale price
                                        } else {
                                            echo $product->get_price_html(); // Show regular price if not on sale
                                        }
                                    ?>
                                </span>

                                    <!-- Display Product Featured Image -->
                                    <div class="popular-products__img">
                                        <a class="popular-products__img-link" href="<?php the_permalink(); ?>">
                                            <?php echo woocommerce_get_product_thumbnail(); ?>
                                        </a>
                                    </div>
                                    
                                    <!-- Display Product Title -->
                                    <h2 class="popular-products__title">
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h2>

                                    

                                    <div class="popular-products__links">
                                        <a href="<?php echo esc_url($product->add_to_cart_url()); ?>" 
                                        class="button popular-products__btn" 
                                        data-quantity="1" 
                                        data-product_id="<?php echo esc_attr($product->get_id()); ?>" 
                                        data-product_sku="<?php echo esc_attr($product->get_sku()); ?>" 
                                        rel="nofollow">
                                            Add to Cart
                                        </a>

                                        
                                        <a href="<?php the_permalink(); ?>" class="button popular-products__btn">View Product</a>
                                    </div>

                                    <!-- Display Product Star Rating -->
                                    <div class="popular-products__rating">
                                        <?php if ($product->get_average_rating()) : ?>
                                            <?php echo wc_get_rating_html($product->get_average_rating()); ?>
                                        <?php endif; ?>
                                    </div>
                        </div> <!-- end card -->

                    
                    <?php endwhile; ?>



                </div> <!-- end popular products grid -->
            <?php
            else :
                echo '<p>No special offers found</p>';
            endif;

            wp_reset_postdata();
            ?>
            </div>
            <a class="button popular-products__btn-large" href="/shop/">View Shop</a>
            </section>




    


<?php
//get_sidebar();
get_footer();
