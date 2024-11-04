<?php if (have_rows('page_builder')) : ?>
    <?php while (have_rows('page_builder')) : the_row(); ?>
    
        <?php if( get_row_layout() == '1_column' ){ ?>

            <?php $padding_top = get_sub_field('one_column_padding_top'); ?>
            <?php $padding_bottom = get_sub_field('one_column_padding_bottom'); ?>
            <?php $padding_left = get_sub_field('one_column_padding_left'); ?>
            <?php $padding_right = get_sub_field('one_column_padding_right'); ?>
            <?php $add_class_name = get_sub_field('add_class_name'); ?>
            <?php $center_text = get_sub_field('center_text_one_column'); ?>

            <section class="container <?php if($center_text == "center-text"){ echo "text-center"; } ?> <?php echo $add_class_name; ?>" style="padding-top: <?php echo $padding_top; ?>px; padding-bottom: <?php echo $padding_bottom; ?>px; padding-left: <?php echo $padding_left; ?>vw; padding-right: <?php echo $padding_right; ?>vw;">
                
                <?php if(!empty(get_sub_field('one_column_heading'))){ ?>
                    <h2 class="column__heading"><?php the_sub_field('one_column_heading'); ?></h2>
                <?php } ?> 

                <?php if(!empty(get_sub_field('one_column_content'))){ ?>
                    <?php the_sub_field('one_column_content'); ?>
                <?php } ?>    
                
                <?php if(!empty(get_sub_field('one_column_button'))){ ?>
                    <a class="button column__btn" href="<?php the_sub_field('one_column_button_link'); ?>"><?php the_sub_field('one_column_button'); ?></a>
                <?php } ?>

                <?php  //$columns = get_sub_field('columns'); ?>

            </section>

       <?php } elseif(get_row_layout() == '1_column_grey'){ ?>

            <?php $padding_top = get_sub_field('one_column_grey_padding_top'); ?>
            <?php $padding_bottom = get_sub_field('one_column_grey_padding_bottom'); ?>
            <?php $padding_left = get_sub_field('one_column_grey_padding_left'); ?>
            <?php $padding_right = get_sub_field('one_column_grey_padding_right'); ?>
            <?php $add_class_name = get_sub_field('add_class_name_grey'); ?>
            <?php $center_text = get_sub_field('center_text_one_column_grey'); ?>

            <section class="one-column-grey">
            <div class="grey-zig-zag-panel__border-top"></div>
                <div class="container <?php if($center_text == "center-text"){ echo "text-center"; } ?> <?php echo $add_class_name; ?>" style="padding-top: <?php echo $padding_top; ?>px; padding-bottom: <?php echo $padding_bottom; ?>px; padding-left: <?php echo $padding_left; ?>vw; padding-right: <?php echo $padding_right; ?>vw;">
                    
                    <?php if(!empty(get_sub_field('one_column_grey_heading'))){ ?>
                        <h2 class="column__heading"><?php the_sub_field('one_column_grey_heading'); ?></h2>
                    <?php } ?> 

                    <?php if(!empty(get_sub_field('one_column_grey_content'))){ ?>
                        <?php the_sub_field('one_column_grey_content'); ?>
                    <?php } ?>    
                    
                    <?php if(!empty(get_sub_field('one_column_button'))){ ?>
                        <a class="button column__btn" href="<?php the_sub_field('one_column_grey_button_link'); ?>"><?php the_sub_field('one_column_grey_button'); ?></a>
                    <?php } ?>

                    <?php  //$columns = get_sub_field('columns'); ?>

                </div>
            </section>

       <?php } elseif(get_row_layout() == 'underline') { ?>
            <div class="container">
                <hr style="margin-top:<?php the_sub_field('margin_top'); ?>px; margin-bottom:<?php the_sub_field('margin_bottom'); ?>px;" class="underline">
            </div>
       <?php } elseif(get_row_layout() == '2_column'){ ?>

            <?php $padding_top = get_sub_field('two_column_padding_top'); ?>
            <?php $padding_bottom = get_sub_field('two_column_padding_bottom'); ?>
            <?php $padding_left = get_sub_field('two_column_padding_left'); ?>
            <?php $padding_right = get_sub_field('two_column_padding_right'); ?>
            <?php $add_class_name = get_sub_field('add_class_name'); ?>
            <?php $center_text = get_sub_field('center_text_2_column'); ?>

            <section class="container <?php if($center_text == "center-text"){ echo "text-center"; } ?> <?php echo $add_class_name; ?>" style="padding-top: <?php echo $padding_top; ?>px; padding-bottom: <?php echo $padding_bottom; ?>px; padding-left: <?php echo $padding_left; ?>px; padding-right: <?php echo $padding_right; ?>px;">
                <div class="column two-column grid-gap-1">
                    <div class="column__col">

                        <?php if(get_sub_field('two_column_icon_left') != "blank"){ ?>
                            <i class="column__icon fas <?php the_sub_field('two_column_icon_left'); ?>"></i>
                        <?php } ?>
                        
                        <?php if(!empty(get_sub_field('two_column_heading_left'))){ ?>    
                            <h3 class="column__heading"><?php the_sub_field('two_column_heading_left'); ?></h3>
                        <?php } ?>    

                        <?php if(!empty(get_sub_field('two_column_content_left'))){ ?>
                            <p class="column__content"><?php the_sub_field('two_column_content_left'); ?></p>
                        <?php } ?>

                        <?php if(!empty(get_sub_field('two_column_button_left'))){ ?>
                            <a href="<?php the_sub_field('two_column_button_link_left'); ?>" class="button column__btn"><?php the_sub_field('two_column_button_left'); ?></a>
                        <?php } ?>    
                        
                        
                    </div>
                    <div class="column__col">
        
                        <?php if(get_sub_field('two_column_icon_right') != "blank"){ ?>
                            <i class="column__icon fas <?php the_sub_field('two_column_icon_right'); ?>"></i>
                        <?php } ?>

                        <?php if(!empty(get_sub_field('two_column_heading_right'))){ ?>    
                            <h3 class="column__heading"><?php the_sub_field('two_column_heading_right'); ?></h3>
                        <?php } ?>    
                        

                        <?php if(!empty(get_sub_field('two_column_content_right'))){ ?>
                            <p class="column__content"><?php the_sub_field('two_column_content_right'); ?></p>
                        <?php } ?>

                        <?php if(!empty(get_sub_field('two_column_button_right'))){ ?>
                            <a href="<?php the_sub_field('two_column_button_link_right'); ?>" class="button column__btn"><?php the_sub_field('two_column_button_right'); ?></a>
                        <?php } ?>

                        
                    </div>
                </div>
            </section>
       <?php } elseif(get_row_layout() == '3_column'){ ?>

        <?php $padding_top = get_sub_field('three_column_padding_top'); ?>
        <?php $padding_bottom = get_sub_field('three_column_padding_bottom'); ?>
        <?php $padding_left = get_sub_field('three_column_padding_left'); ?>
        <?php $padding_right = get_sub_field('three_column_padding_right'); ?>
        <?php $add_class_name = get_sub_field('add_class_name'); ?>

        <section class="container text-center <?php echo $add_class_name; ?>" style="padding-top: <?php echo $padding_top; ?>px; padding-bottom: <?php echo $padding_bottom; ?>px; padding-left: <?php echo $padding_left; ?>px; padding-right: <?php echo $padding_right; ?>px;">
            <div class="column three-column grid-gap-4">
                <div class="column__col">

                        <?php if(get_sub_field('three_column_icon_left') != "blank"){ ?>
                            <i class="column__icon fas <?php the_sub_field('three_column_icon_left'); ?>"></i>
                        <?php } ?>
                        
                        <?php if(!empty(get_sub_field('three_column_heading_left'))){ ?>    
                            <h3 class="column__heading"><?php the_sub_field('three_column_heading_left'); ?></h3>
                        <?php } ?>    

                        <?php if(!empty(get_sub_field('three_column_content_left'))){ ?>
                            <p class="column__content"><?php the_sub_field('three_column_content_left'); ?></p>
                        <?php } ?>

                        <?php if(!empty(get_sub_field('three_column_button_left'))){ ?>
                            <a href="<?php the_sub_field('three_column_button_link_left'); ?>" class="button column__btn"><?php the_sub_field('three_column_button_left'); ?></a>
                        <?php } ?>  

                </div>

                <div class="column__col">

                        <?php if(get_sub_field('three_column_icon_middle') != "blank"){ ?>
                            <i class="column__icon fas <?php the_sub_field('three_column_icon_middle'); ?>"></i>
                        <?php } ?>

                        <?php if(!empty(get_sub_field('three_column_heading_middle'))){ ?>    
                            <h3 class="column__heading"><?php the_sub_field('three_column_heading_middle'); ?></h3>
                        <?php } ?>    

                        <?php if(!empty(get_sub_field('three_column_content_middle'))){ ?>
                            <p class="column__content"><?php the_sub_field('three_column_content_middle'); ?></p>
                        <?php } ?>

                        <?php if(!empty(get_sub_field('three_column_button_middle'))){ ?>
                            <a href="<?php the_sub_field('three_column_button_link_middle'); ?>" class="button column__btn"><?php the_sub_field('three_column_button_middle'); ?></a>
                        <?php } ?>  

                </div>
                <div class="column__col">

                        <?php if(get_sub_field('three_column_icon_right') != "blank"){ ?>
                            <i class="column__icon fas <?php the_sub_field('three_column_icon_right'); ?>"></i>
                        <?php } ?>

                        <?php if(!empty(get_sub_field('three_column_heading_right'))){ ?>    
                            <h3 class="column__heading"><?php the_sub_field('three_column_heading_right'); ?></h3>
                        <?php } ?>    

                        <?php if(!empty(get_sub_field('three_column_content_right'))){ ?>
                            <p class="column__content"><?php the_sub_field('three_column_content_right'); ?></p>
                        <?php } ?>

                        <?php if(!empty(get_sub_field('three_column_button_right'))){ ?>
                            <a href="<?php the_sub_field('three_column_button_link_right'); ?>" class="button column__btn"><?php the_sub_field('three_column_button_right'); ?></a>
                        <?php } ?>  

                </div>
            </div>
        </section>
       <?php } elseif(get_row_layout() == '2_column_featured_right'){ ?>

            <?php $padding_top = get_sub_field('two_column_featured_padding_top');  ?>
            <?php $padding_bottom = get_sub_field('two_column_featured_padding_bottom');  ?>
            <?php $panel_background_color = get_sub_field('two_column_featured_panel_background_colour'); ?>
            <?php $section_background_color = get_sub_field('two_column_featured_section_background_colour'); ?>

            <section class="text-center" style="background: <?php echo $section_background_color; ?>; padding-top: <?php echo $padding_top; ?>px; padding-bottom: <?php echo $padding_bottom; ?>px">
                <div class="column two-column-featured container">

                    <div style="background: <?php echo $panel_background_color ?>;" class="column__col two-column-featured__col">

                        <?php if(!empty(get_sub_field('two_column_featured_heading_left'))){ ?>   
                                <h3 class="column__heading two-column-featured__heading"><?php the_sub_field('two_column_featured_heading_left'); ?></h3>
                            <?php } ?>    

                            <?php if(!empty(get_sub_field('two_column_featured_content_left'))){ ?>
                                <p class="column__content"><?php the_sub_field('two_column_featured_content_left'); ?></p>
                            <?php } ?>

                            <?php if(!empty(get_sub_field('two_column_featured_button_left'))){ ?>
                                <a href="<?php the_sub_field('two_column_featured_button_link_left'); ?>" class="button column__btn"><?php the_sub_field('two_column_featured_button_left'); ?></a>
                            <?php } ?>  


                    </div>
                    <div class="column__col">
                                <?php $image_height = get_sub_field('two_column_featured_panel_height'); ?>
                                <?php $two_column_featured_image_right = get_sub_field('two_column_featured_image_right'); ?>
                                <img style="height: <?php echo $image_height; ?>px;" class="column__img" src="<?php echo $two_column_featured_image_right['url']; ?>" alt="<?php echo $two_column_featured_image_right['alt']; ?>">
                    </div>

                </div>
            </section>    
       <?php } elseif(get_row_layout() == '2_column_featured_contact'){ ?>
            <section class="two-column-featured-contact featured-contact text-center xxx">
                <div class="column two-column-featured-contact__wrapper container">

                    <div class="column__col two-column-featured-contact__col">

                        <?php if(!empty(get_sub_field('two_column_featured_contact_heading_left'))){ ?>    
                                <h3 class="column__heading two-column-featured-contact__heading"><?php the_sub_field('two_column_featured_contact_heading'); ?></h3>
                            <?php } ?>    

                            <!-- <?php //if(!empty(get_sub_field('two_column_featured_contact_content_left'))){ ?>
                                <p class="column__content"><?php //the_sub_field('two_column_featured_contact_content_left'); ?></p>
                            <?php //} ?> -->

                            <div class="two-column-featured-contact__telephone">    
                                <?php if( get_theme_mod( 'ah_telephone_handle' ) ){ ?>
                               
                                        <?php $tel_link = str_replace(' ', '', get_theme_mod( 'ah_telephone_handle' )); ?>
                                        <a class="two-column-featured-contact__tel" href="tel:<?php echo $tel_link; ?>"><i class="two-column-featured-contact__icon fas fa-phone-volume"></i> <?php echo get_theme_mod( 'ah_telephone_handle' ) ?></a>
                              
                                <?php } ?>

                                <?php if( get_theme_mod( 'ah_mobile_handle' ) ){ ?>
                                    <span class="column__content">
                                        <?php $mob_link = str_replace(' ', '', get_theme_mod( 'ah_mobile_handle' )); ?>
                                    <a class="two-column-featured-contact__tel" href="tel:<?php echo $mob_link; ?>"><i class="two-column-featured-contact__icon fas fa-mobile-alt"></i> <?php echo get_theme_mod( 'ah_mobile_handle' ) ?></a>
                                    </span>
                                <?php } ?>
                            </div>    

                            <?php if( get_theme_mod( 'ah_email_handle' ) ){ ?>
                                <span class="two-column-featured-contact__email">
                                    <a href="mailto:<?php echo get_theme_mod( 'ah_email_handle' ) ?>"><i class="two-column-featured-contact__icon fas fa-envelope"></i> <?php echo get_theme_mod( 'ah_email_handle' ) ?></a>
                                </span>
                            <?php } ?>

                            <?php if( get_theme_mod( 'ah_address_handle' ) ){ ?>
                                <span class="two-column-featured-contact__content">
							        <?php echo get_theme_mod( 'ah_address_handle' ) ?>
                                </span>
						    <?php } ?>

                            <?php $short = get_sub_field('two_column_featured_contact_shortcode'); ?>
                            <?php echo do_shortcode($short); ?>

                    </div>

                </div>
            </section>   
       <?php } elseif(get_row_layout() == 'banner'){ ?>

            <section class="banner text-center">

                <div class="banner__card">
                    <div class="banner__content">

                        <?php if(!empty(get_sub_field('banner_title'))){ ?>
                            <h3 class="banner__title"><?php the_sub_field('banner_title'); ?></h3>
                        <?php } ?>

                        <?php if(!empty(get_sub_field('banner_subtitle'))){ ?>
                            <p class="banner__subtitle"><?php the_sub_field('banner_subtitle'); ?></p>
                        <?php } ?>


                        <?php if(!empty(get_sub_field('banner_button'))){ ?>
                            <a href="<?php the_sub_field('banner_butto_link'); ?>" class="button banner__btn"><?php the_sub_field('banner_button'); ?></a>
                        <?php } ?>
                        
                    </div>
                </div>

                <?php $banner_image = get_sub_field('banner_image'); ?> 

                <?php if(!empty(get_sub_field('banner_image'))){ ?>
                    <img class="banner__img" src="<?php echo $banner_image['url']; ?>" alt="<?php echo $banner_image['alt']; ?>">
                <?php } else { ?>

                <?php } ?>

            </section>

       <?php } elseif(get_row_layout() == 'news_block'){ ?>

            <?php
            $args = array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'posts_per_page' => 3,
            'orderby' => 'ID',
            'order' => 'ASC'
            ); 
            ?>

            <?php $padding_top = get_sub_field('news_section_padding_top');  ?>
            <?php $padding_bottom = get_sub_field('news_section_padding_bottom');  ?>
            <?php $padding_left = get_sub_field('news_section_padding_left');  ?>
            <?php $padding_right = get_sub_field('news_section_padding_right');  ?>
            <?php $section_background_color = get_sub_field('news_section_panel_background_colour'); ?>

            <section class="news-section" style="background: <?php echo $section_background_color; ?>; padding-top: <?php echo $padding_top; ?>px; padding-bottom: <?php echo $padding_bottom; ?>px; padding-left: <?php echo $padding_left; ?>px; padding-right: <?php echo $padding_right; ?>px;">
                <div class="container">
                <div class="news-section__container">
                    <h3 class="news-section__title"><?php the_sub_field('news_section_main_title'); ?></h3>
                    <a href="/news/">View All <i class="fas fa-chevron-right"></i></a>
                </div>
                <div class="news-section__content owl-carousel owl-carousel-news owl-theme">

                    <?php $loop = new WP_Query($args); ?>
                    <?php if ($loop->have_posts()) : ?>
                    <?php $count = 0; ?>
                    <?php while ($loop->have_posts()) : $loop->the_post(); ?>
                    <?php $count++ ?>
                    <?php
                    global $post;
                    $post_slug = $post->post_name;
                    ?>
                            
                            <div class="news-section__card">

                                <?php if (has_post_thumbnail()) : ?>
                                    <a href="<?php the_permalink(); ?>" class="news-section__featured-image">
                                        <?php the_post_thumbnail('large'); ?>
                                    </a>
                                <?php endif; ?>

                                <h3 class="item news-section__card-title">

                                    <?php $title_string = get_the_title(); ?>
                                    <?php $content_string = get_field('post_excerpt', false, false); ?>
   
                                    <?php
                                    if (strlen($title_string) > 31) {
                                        $stringCut = substr($title_string, 0, 31);
                                        $endPoint = strrpos($stringCut, ' ');
                                        $title_string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
                                        $title_string .= '...';
                                    }
                                    echo $title_string;
                                    ?>
                                </h3>
                                <p>
                                <?php
                                    if (strlen($content_string) > 140) {
                                        $stringCut = substr($content_string, 0, 140);
                                        $endPoint = strrpos($stringCut, ' ');
                                        $content_string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
                                        $content_string .= '...';
                                    }
                                    echo $content_string;
                                    ?>
                                </p>
                                <a class="button news-section__card-btn" href="<?php the_permalink(); ?>">
                                <?php 
                                    if ($count % 2 == 0) {
                                        echo "See more...";
                                    } else {
                                        echo "Learn more...";
                                    }
                                ?>
                                
                                </a>
                        </div>

                    <?php endwhile; ?>
                    <?php endif; ?>
                    <?php wp_reset_query(); ?>

                </div>
                </div>                    
            </section>
       <?php } elseif(get_row_layout() == '4_column'){ ?>

        <?php $padding_top = get_sub_field('four_column_padding_top'); ?>
        <?php $padding_bottom = get_sub_field('four_column_padding_bottom'); ?>
        <?php $padding_left = get_sub_field('four_column_padding_left'); ?>
        <?php $padding_right = get_sub_field('four_column_padding_right'); ?>
        <?php $section_class = get_sub_field('four_column_section_class_name'); ?>

        <section class="container text-center <?php echo $section_class ?>" style="padding-top: <?php echo $padding_top; ?>px; padding-bottom: <?php echo $padding_bottom; ?>px; padding-left: <?php echo $padding_left; ?>px; padding-right: <?php echo $padding_right; ?>px;">
            
            <div class="column four-column grid-gap-1">
                <div class="column__col">

                        <?php if(get_sub_field('four_column_icon_left') != "blank"){ ?>
                            <i class="column__icon fas <?php the_sub_field('four_column_icon_left'); ?>"></i>
                        <?php } ?>
                        
                        <?php if(!empty(get_sub_field('four_column_heading_left'))){ ?>    
                            <h3 class="column__heading"><?php the_sub_field('four_column_heading_left'); ?></h3>
                        <?php } ?>    

                        <?php if(!empty(get_sub_field('four_column_content_left'))){ ?>
                            <p class="column__content"><?php the_sub_field('four_column_content_left'); ?></p>
                        <?php } ?>

                        <?php if(!empty(get_sub_field('four_column_button_left'))){ ?>
                            <a href="<?php the_sub_field('four_column_button_link_left'); ?>" class="button column__btn"><?php the_sub_field('four_column_button_left'); ?></a>
                        <?php } ?>  

                </div>

                <div class="column__col">

                        <?php if(get_sub_field('four_column_icon_middle_left') != "blank"){ ?>
                            <i class="column__icon fas <?php the_sub_field('four_column_icon_middle_left'); ?>"></i>
                        <?php } ?>

                        <?php if(!empty(get_sub_field('four_column_heading_middle_left'))){ ?>    
                            <h3 class="column__heading"><?php the_sub_field('four_column_heading_middle_left'); ?></h3>
                        <?php } ?>    

                        <?php if(!empty(get_sub_field('four_column_content_middle_left'))){ ?>
                            <p class="column__content"><?php the_sub_field('four_column_content_middle_left'); ?></p>
                        <?php } ?>

                        <?php if(!empty(get_sub_field('four_column_button_middle_left'))){ ?>
                            <a href="<?php the_sub_field('four_column_button_link_middle_left'); ?>" class="button column__btn"><?php the_sub_field('four_column_button_middle_left'); ?></a>
                        <?php } ?>  

                </div>

                <div class="column__col">

                        <?php if(get_sub_field('four_column_icon_middle_right') != "blank"){ ?>
                            <i class="column__icon fas <?php the_sub_field('four_column_icon_middle_right'); ?>"></i>
                        <?php } ?>

                        <?php if(!empty(get_sub_field('four_column_heading_middle_right'))){ ?>    
                            <h3 class="column__heading"><?php the_sub_field('four_column_heading_middle_right'); ?></h3>
                        <?php } ?>    

                        <?php if(!empty(get_sub_field('four_column_content_middle_right'))){ ?>
                            <p class="column__content"><?php the_sub_field('four_column_content_middle_right'); ?></p>
                        <?php } ?>

                        <?php if(!empty(get_sub_field('four_column_button_middle_right'))){ ?>
                            <a href="<?php the_sub_field('four_column_button_link_middle_right'); ?>" class="button column__btn"><?php the_sub_field('four_column_button_middle_right'); ?></a>
                        <?php } ?>  

                </div>

                <div class="column__col">

                        <?php if(get_sub_field('four_column_icon_right') != "blank"){ ?>
                            <i class="column__icon fas <?php the_sub_field('four_column_icon_right'); ?>"></i>
                        <?php } ?>

                        <?php if(!empty(get_sub_field('four_column_heading_right'))){ ?>    
                            <h3 class="column__heading"><?php the_sub_field('four_column_heading_right'); ?></h3>
                        <?php } ?>    

                        <?php if(!empty(get_sub_field('four_column_content_right'))){ ?>
                            <p class="column__content"><?php the_sub_field('four_column_content_right'); ?></p>
                        <?php } ?>

                        <?php if(!empty(get_sub_field('four_column_button_right'))){ ?>
                            <a href="<?php the_sub_field('four_column_button_link_right'); ?>" class="button column__btn"><?php the_sub_field('three_column_button_right'); ?></a>
                        <?php } ?>  

                </div>
            </div>
        </section>


       <?php } elseif(get_row_layout() == 'grey-zig-zag-panel'){ ?>

        <?php 
        $grey_zigzag_panel_title = get_sub_field('grey_zigzag_panel_title');
        $grey_zigzag_panel_content = get_sub_field('grey_zigzag_panel_content');
        $grey_zigzag_panel_padding_top = get_sub_field('grey_zigzag_panel_padding_top');
        $grey_zigzag_panel_padding_bottom = get_sub_field('grey_zigzag_panel_padding_bottom');
        $grey_zigzag_panel_padding_left = get_sub_field('grey_zigzag_panel_padding_left');
        $grey_zigzag_panel_padding_right = get_sub_field('grey_zigzag_panel_padding_right');
        ?>

        <section class="grey-zig-zag-panel" style="padding-top: <?php echo $grey_zigzag_panel_padding_top; ?>px; padding-bottom: <?php echo $grey_zigzag_panel_padding_bottom; ?>px; padding-left: <?php echo $grey_zigzag_panel_padding_left; ?>px; padding-right: <?php echo $grey_zigzag_panel_padding_right; ?>px;">
            <div class="grey-zig-zag-panel__border-top"></div>
                <div class="container">
                        <?php if( get_sub_field('grey_zigzag_panel_title') != "blank"){ ?>
                            <h2 class="grey-zig-zag-panel__title"><?php echo $grey_zigzag_panel_title; ?></h2>
                        <?php } ?>
                
                <div class="green-underline"></div>
                        <?php if( get_sub_field('grey_zigzag_panel_content') != "blank"){ ?>
                            <p class="grey-zig-zag-panel__content"><?php echo $grey_zigzag_panel_content; ?></p>
                        <?php } ?>
                
                </div>
            <div class="grey-zig-zag-panel__border-bottom"></div>
        </section>

       <?php } elseif(get_row_layout() == 'popular_products'){ ?>
            
            <?php $products_per_page = get_sub_field('products_per_page') ?>
            <?php $number_of_columns = get_sub_field('number_of_columns') ?>

            <section class="popular-products">
            <div class="container">
            <h2 class="popular-products__heading">Popular Products</h2>
            <div class="green-underline"></div> 
            
            

            <?php
            // Define WooCommerce product query arguments
            $args = array(
                'post_type' => 'product',
                'posts_per_page' => $products_per_page, // Retrieve all products
                'meta_key' => 'total_sales',
                'orderby' => 'meta_value_num', // Order by total sales
                'order' => 'DESC',  
            );

            // Query WooCommerce products
            $loop = new WP_Query($args);

            if ($loop->have_posts()) : ?>
            
                <!--<div class="popular-products__grid">-->

                    <div class="owl-carousel-popular-products owl-carousel owl-theme">

                    <?php while ($loop->have_posts()) : $loop->the_post();
                        global $product; ?>
                        <div class="popular-products__card <?php echo $product->is_on_sale() ? 'sale' : ''; ?>">

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
                                    <!-- <h2 class="popular-products__title">
                                        <a href="<?php //the_permalink(); ?>"><?php //the_title(); ?></a>
                                    </h2> -->

                                    <h2 class="popular-products__title">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php
                                            $title = get_the_title();
                                            echo mb_strimwidth($title, 0, 58, '...');
                                            ?>
                                        </a>
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

                    </div> <!-- end owl div -->   

                <!--</div>--<-- end popular products grid -->
            <?php
            else :
                echo '<p>No products found</p>';
            endif;

            wp_reset_postdata();
            ?>
            </div>
            <a class="button popular-products__btn-large" href="/shop/">View Shop</a>
            </section>

            

       <?php } else { ?>
            <?php echo "There was an error!"; ?>
       <?php } ?>

    <?php endwhile; ?>
<?php endif; ?>