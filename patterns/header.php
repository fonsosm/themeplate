<?php

/**
 * Title: Header
 * Slug: themeplate/header
 * Categories: headers
 * Block Types: core/template-part/header
 */
?>

<!-- wp:group {"layout":{"inherit":"true"}} -->
<div class="wp-block-group">
    <!-- wp:group {"align":"full","layout":{"type":"flex","justifyContent":"space-between"},"style":{"spacing":{"padding":{"bottom":"30px","top":"30px"}}}} -->
    <div class="wp-block-group alignfull" style="padding-bottom:30px;padding-top:30px">

        <!-- wp:group {"layout":{"type":"flex"}} -->
        <div class="wp-block-group">
            <!-- wp:site-logo {"width":64} /-->

            <!-- wp:group -->
            <div class="wp-block-group">
                <!-- wp:site-title /-->
                <!-- wp:site-tagline /-->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->

        <!-- wp:navigation {"layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"right","orientation":"horizontal"},"style":{"spacing":{"margin":{"top":"0"}}}} /-->

    </div>
    <!-- /wp:group -->

</div>
<!-- /wp:group -->

<!-- wp:spacer {"height":50} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->