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
 "className":"flyhigh-buttons-compact",
 "layout":{"type":"constrained"},
 "lock":{"move":true,"remove":true},
 "style":{
    "elements":{
        "button":{"spacing":{"padding":{"top":"var:preset|spacing|flyhigh-xxs","right":"var:preset|spacing|flyhigh-xxs","bottom":"var:preset|spacing|flyhigh-xxs","left":"var:preset|spacing|flyhigh-xxs"}}},
        "link":{"spacing":{"padding":{"top":"var:preset|spacing|flyhigh-s","bottom":"var:preset|spacing|flyhigh-s"}}}},
    "typography":{"lineHeight":"1"}},
 "textColor":"flyhigh-blue",
 "allowedBlocks":[]} -->
<div class="wp-block-group alignfull flyhigh-buttons-compact has-flyhigh-blue-color has-text-color" style="line-height:1">

    <!-- wp:group {
     "backgroundColor":"flyhigh-white",
     "layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"},
     "lock":{"move":true,"remove":true},
     "style":{"border":{"radius":"var:preset|spacing|flyhigh-xxs"},"spacing":{"margin":{"top":"var:preset|spacing|flyhigh-s"}}},
     "allowedBlocks":["core/paragraph","core/heading","core/buttons","core/group","core/math","core/pullquote","core/separator","core/spacer","core/quote","core/social-links","core/search","core/rss","core/tag-cloud","core/navigation","core/site-logo","core/site-title","core/site-tagline","core/loginout"]} -->
    <div class="wp-block-group has-flyhigh-white-background-color has-background" style="border-radius:var(--wp--preset--spacing--flyhigh-xxs);margin-top:var(--wp--preset--spacing--flyhigh-s)">

        <!-- wp:site-title {"level":0} /-->

        <!-- wp:group {
         "layout":{"type":"flex","flexWrap":"nowrap"},
         "style":{"spacing":{"blockGap":"var:preset|spacing|flyhigh-xxs"}},
         "allowedBlocks":["core/paragraph","core/heading","core/buttons","core/social-links","core/search","core/rss","core/site-logo","core/site-title","core/site-tagline","core/loginout"]} -->
        <div class="wp-block-group">

            <!-- wp:navigation {"overlayMenu":"never"} /-->
            
            <!-- wp:navigation {
             "icon":"menu",
             "fontSize":"flyhigh-large",
             "overlayMenu":"always",
             "overlayTextColor":"flyhigh-blue",
             "style":{
                "elements":{
                    "link":{"spacing":{"padding":{"top":"var:preset|spacing|flyhigh-s","right":"0","bottom":"var:preset|spacing|flyhigh-s"},"right":"0"}}}}} /-->
        
        </div>
        <!-- /wp:group -->

    </div>
    <!-- /wp:group -->

</div>
<!-- /wp:group -->