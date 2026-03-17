<?php
/**
 * Title: Banner with centered Text
 * Slug: flyhigh/banner-centered
 * Categories: banner
 * Block Types: core/cover
 * Description: Site header with site title and navigation.
 */

?>

<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/erpeler_ley.jpg","hasParallax":true,"dimRatio":50,"isUserOverlayColor":true,"minHeight":100,"minHeightUnit":"vh","gradient":"flyhigh-cover-darker-overlay","sizeSlug":"full","align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull has-parallax" style="min-height:100vh">
    <div class="wp-block-cover__image-background size-full has-parallax" style="background-position:50% 50%;background-image:url(<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/erpeler_ley.jpg)"></div>
    <span aria-hidden="true" class="wp-block-cover__background has-background-dim wp-block-cover__gradient-background has-background-gradient has-flyhigh-cover-darker-overlay-gradient-background"></span>
    <div class="wp-block-cover__inner-container">

        <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|flyhigh-yellow"}}},"typography":{"fontWeight":"700","lineHeight":"1"}},"textColor":"flyhigh-yellow","fontFamily":"flyhigh-secondary","fontSize":"flyhigh-x-large"} -->
        <p class="has-flyhigh-yellow-color has-text-color has-link-color has-flyhigh-secondary-font-family has-flyhigh-x-large-font-size" style="font-weight:700;line-height:1"><?php echo esc_html_x( 'Lorem ipsum dolor sit amet', 'Sample hero sub heading', 'flyhigh' ); ?></p>
        <!-- /wp:paragraph -->

        <!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"lineHeight":"1"},"spacing":{"margin":{"top":"0"}}},"fontSize":"flyhigh-2x-large"} -->
        <h1 class="wp-block-heading has-text-align-center has-flyhigh-2-x-large-font-size" style="margin-top:0;line-height:1"><?php echo esc_html_x( 'Consetetur sadipscing elitr', 'Sample hero heading', 'flyhigh' ); ?></h1>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center"} -->
        <p class="has-text-align-center"><?php echo esc_html_x( 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.', 'Sample hero paragraph', 'flyhigh' ); ?></p>
        <!-- /wp:paragraph -->

    </div>
</div>
<!-- /wp:cover -->