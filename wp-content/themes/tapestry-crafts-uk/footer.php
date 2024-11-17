<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package AH_Wordpress_Boilerplate
 */

?>

<section class="giftwrap-strapline">
    <h4 class="giftwrap-strapline__heading">Gift a tapestry kit to someone special and allow them to be creative</h4>
    <p class="giftwrap-strapline__content">We offer a <a href="/gift-wrap/">gift wrapping service</a> for all orders. Just choose GIFT WRAP on checkout</p>
</section>

<footer class="footer">
    <section class="footer__layout container">
        <div class="footer__col">
            <h5 class="footer__subheading">About Us</h5>
            <?php wp_boilerplate_footer_menu_1(); ?>
        </div>
        <div class="footer__col">
        <h5 class="footer__subheading">Important Links</h5>
            <?php wp_boilerplate_footer_menu_2(); ?>
        </div>
        <div class="footer__col">
        <h5 class="footer__subheading">Popular Categories</h5>
            <?php wp_boilerplate_footer_menu_3(); ?>
        </div>
        <!-- <img class="footer__logo" src="/wp-content/uploads/2023/12/footer-logo-1.png"> -->

        <div class="footer__signoff">
            <div class="footer__signoff-col">
                <p class="footer__signoff-content">© <?php echo date("Y"); ?> • Tapestry Crafts UK • All Rights Reserved</p>
            </div>
            <div class="footer__signoff-col">
                <a class="footer__signoff-content" href="Mailto:tapestrycrafts.uk@yahoo.com">Email: tapestrycrafts.uk@yahoo.com</a>
                <?php //if( get_theme_mod( 'ah_twitter_handle' ) ){ ?>
                            <!-- <a target="_blank" href="<?php //echo get_theme_mod( 'ah_twitter_handle' ) ?>"><i class="footer__signoff-icon fa-brands fa-x-twitter"></i></a> -->
                <?php //} ?>
                <?php //if( get_theme_mod( 'ah_facebook_handle' ) ){ ?>
                            <!-- <a target="_blank" href="<?php //echo get_theme_mod( 'ah_facebook_handle' ) ?>"><i class="footer__signoff-icon fab fa-facebook-f"></i></a> -->
                <?php //} ?>
                <?php //if( get_theme_mod( 'ah_instagram_handle' ) ){ ?>
                            <!-- <a target="_blank" href="<?php //echo get_theme_mod( 'ah_instagram_handle' ) ?>"><i class="footer__signoff-icon fab fa-instagram"></i></a> -->
                <?php //} ?>
                <?php //if( get_theme_mod( 'ah_youtube_handle' ) ){ ?>
                            <!-- <a target="_blank" href="<?php //echo get_theme_mod( 'ah_youtube_handle' ) ?>"><i class="footer__signoff-icon fab fa-youtube"></i></a> -->
                <?php //} ?>
                
            </div>
        </div>
    </section>
</footer>


	<!-- Cookie Consent by FreePrivacyPolicy.com https://www.FreePrivacyPolicy.com -->
	<!-- <script type="text/javascript" src="//www.freeprivacypolicy.com/public/cookie-consent/4.2.0/cookie-consent.js" charset="UTF-8"></script>
	<script type="text/javascript" charset="UTF-8">
	document.addEventListener('DOMContentLoaded', function () {
	cookieconsent.run({"notice_banner_type":"simple","consent_type":"express","palette":"light","language":"en","page_load_consent_levels":["strictly-necessary"],"notice_banner_reject_button_hide":false,"preferences_center_close_button_hide":false,"page_refresh_confirmation_buttons":false,"website_name":"Tapestry Crafts UK","website_privacy_policy_url":"https://tapestry-crafts-uk.co.uk/privacy-policy/"});
	});
	</script>

	<noscript>Cookie Consent by <a href="https://www.freeprivacypolicy.com/">Free Privacy Policy Generator</a></noscript> -->
	<!-- End Cookie Consent by FreePrivacyPolicy.com https://www.FreePrivacyPolicy.com -->


<?php wp_footer(); ?>

</body>
</html>
