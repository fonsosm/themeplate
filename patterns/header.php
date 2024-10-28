<?php

/**
 * Title: Header
 * Slug: themeplate/header
 * Categories: header
 * Block Types: core/template-part/header
 */
?>

<!-- wp:group {"layout":{"inherit":"true","type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"align":"full","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|32","top":"var:preset|spacing|32","left":"var:preset|spacing|16","right":"var:preset|spacing|16"}}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
    <div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--32);padding-right:var(--wp--preset--spacing--16);padding-bottom:var(--wp--preset--spacing--32);padding-left:var(--wp--preset--spacing--16)"><!-- wp:group {"layout":{"type":"flex"}} -->
        <div class="wp-block-group"><!-- wp:site-logo {"width":64} /-->

            <!-- wp:group -->
            <div class="wp-block-group"><!-- wp:site-title /-->

                <!-- wp:site-tagline /-->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->

        <!-- wp:navigation {"ref":7,"style":{"spacing":{"margin":{"top":"0"}}},"layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"right","orientation":"horizontal"}} /-->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->