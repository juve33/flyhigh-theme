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
 "layout":{"type":"constrained"},
 "align":"full",
 "backgroundColor":"flyhigh-white",
 "fontSize":"medium",
 "allowedBlocks":["core/paragraph","core/heading","core/buttons","core/group","core/math","core/pullquote","core/separator","core/spacer","core/quote","core/social-links","core/search","core/rss","core/tag-cloud","core/navigation","core/site-logo","core/site-title","core/site-tagline","core/loginout"]} -->
<div class="wp-block-group alignfull has-flyhigh-white-background-color has-background has-medium-font-size">

    <!-- wp:group {
     "layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"},
     "style":{"spacing":{"margin":{"right":"auto","left":"auto"},"padding":{"top":"var:preset|spacing|flyhigh-m","bottom":"var:preset|spacing|flyhigh-m"}}},
     "allowedBlocks":["core/paragraph","core/heading","core/buttons","core/group","core/math","core/pullquote","core/separator","core/spacer","core/quote","core/social-links","core/search","core/rss","core/tag-cloud","core/navigation","core/site-logo","core/site-title","core/site-tagline","core/loginout"]} -->
    <div class="wp-block-group" style="margin-right:auto;margin-left:auto;padding-top:var(--wp--preset--spacing--flyhigh-m);padding-bottom:var(--wp--preset--spacing--flyhigh-m)">

        <!-- wp:site-title {"level":0} /-->

        <!-- wp:group {
        "layout":{"type":"flex","flexWrap":"nowrap"},
        "allowedBlocks":["core/paragraph","core/heading","core/buttons","core/math","core/pullquote","core/separator","core/spacer","core/quote","core/social-links","core/search","core/rss","core/tag-cloud","core/site-logo","core/site-title","core/site-tagline","core/loginout"]} -->
        <div class="wp-block-group">

            <!-- wp:navigation {"overlayMenu":"never"} /-->
            
            <!-- wp:navigation {"icon":"menu","overlayBackgroundColor":"base","overlayMenu":"always","overlayTextColor":"contrast"} /-->
        
        </div>
        <!-- /wp:group -->

    </div>
    <!-- /wp:group -->

</div>
<!-- /wp:group -->
