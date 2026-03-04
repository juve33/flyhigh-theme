<?php
/**
 * Title: Header
 * Slug: flyhigh/header
 * Categories: header
 * Block Types: core/template-part/header
 * Description: Site header with site title and navigation.
 */

?>

<!-- wp:group {
 "align":"full",
 "backgroundColor":"flyhigh-white",
 "layout":{"type":"constrained"},
 "lock":{"move":true,"remove":true},
 "fontSize":"medium",
 "style":{"elements":{"link":{"color":{"text":"var:preset|color|flyhigh-blue"}}}},
 "textColor":"flyhigh-blue",
 "allowedBlocks":[]} -->
<div class="wp-block-group alignfull has-flyhigh-white-background-color has-background has-medium-font-size has-flyhigh-blue-color has-text-color">

    <!-- wp:group {
     "layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"},
     "lock":{"move":true,"remove":true},
     "style":{"spacing":{"margin":{"right":"auto","left":"auto"},"padding":{"top":"var:preset|spacing|flyhigh-l","bottom":"var:preset|spacing|flyhigh-s"}}},
     "allowedBlocks":["core/paragraph","core/heading","core/buttons","core/group","core/math","core/pullquote","core/separator","core/spacer","core/quote","core/social-links","core/search","core/rss","core/tag-cloud","core/navigation","core/site-logo","core/site-title","core/site-tagline","core/loginout"]} -->
    <div class="wp-block-group" style="margin-right:auto;margin-left:auto;padding-top:var(--wp--preset--spacing--flyhigh-l);padding-bottom:var(--wp--preset--spacing--flyhigh-s)">

        <!-- wp:site-title {"level":0} /-->

        <!-- wp:group {
        "layout":{"type":"flex","flexWrap":"nowrap"},
        "allowedBlocks":["core/paragraph","core/heading","core/buttons","core/social-links","core/search","core/rss","core/site-logo","core/site-title","core/site-tagline","core/loginout"]} -->
        <div class="wp-block-group">

            <!-- wp:navigation {"overlayMenu":"never"} /-->
            
            <!-- wp:navigation {"icon":"menu","overlayBackgroundColor":"base","overlayMenu":"always","overlayTextColor":"contrast"} /-->
        
        </div>
        <!-- /wp:group -->

    </div>
    <!-- /wp:group -->

</div>
<!-- /wp:group -->