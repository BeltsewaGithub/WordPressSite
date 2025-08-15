<?php
/**
 * Title: single
 * Slug: tributetogovpress/single
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:group {"style":{"spacing":{"padding":{"right":"24px","left":"24px"}},"dimensions":{"minHeight":"50vh"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="min-height:50vh;padding-right:24px;padding-left:24px"><!-- wp:group {"align":"wide","style":{"border":{"radius":"5px"},"spacing":{"padding":{"right":"24px","left":"24px","top":"24px","bottom":"24px"}}},"backgroundColor":"white","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide has-white-background-color has-background" style="border-radius:5px;padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px"><!-- wp:columns {"align":"wide","textColor":"custom-color-3"} -->
<div class="wp-block-columns alignwide has-custom-color-3-color has-text-color"><!-- wp:column {"width":"70%","style":{"spacing":{"padding":{"right":"10px","left":"10px"},"blockGap":"10px"}}} -->
<div class="wp-block-column" style="padding-right:10px;padding-left:10px;flex-basis:70%"><!-- wp:group {"tagName":"main","align":"wide","style":{"border":{"radius":"5px"}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group alignwide" style="border-radius:5px"><!-- wp:group {"style":{"dimensions":{"minHeight":"48px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="min-height:48px"><!-- wp:post-title /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"typography":{"fontSize":"14px"},"dimensions":{"minHeight":"48px"}},"layout":{"type":"flex"}} -->
<div class="wp-block-group" style="min-height:48px;font-size:14px"><!-- wp:paragraph -->
<p><?php esc_html_e('Posted on ', 'tributetogovpress');?></p>
<!-- /wp:paragraph -->

<!-- wp:post-date {"isLink":true} /-->

<!-- wp:paragraph -->
<p><?php esc_html_e('by ', 'tributetogovpress');?></p>
<!-- /wp:paragraph -->

<!-- wp:post-author {"showAvatar":false,"showBio":false,"isLink":true} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"10px","bottom":"10px","left":"0px","right":"0px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:10px;padding-right:0px;padding-bottom:10px;padding-left:0px"><!-- wp:post-content /--></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"40px"} -->
<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"style":{"border":{"radius":"5px"}},"backgroundColor":"custom-color-1","textColor":"custom-color-2","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-custom-color-2-color has-custom-color-1-background-color has-text-color has-background" style="border-radius:5px"><!-- wp:post-terms {"term":"post_tag","style":{"spacing":{"padding":{"top":"10px","bottom":"10px","left":"10px","right":"10px"}},"elements":{"link":{"color":{"text":"var:preset|color|custom-color-2"}}}},"textColor":"custom-color-2","fontSize":"medium"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:post-navigation-link {"type":"previous","showTitle":true,"arrow":"arrow"} /-->

<!-- wp:post-navigation-link {"showTitle":true,"arrow":"arrow"} /--></div>
<!-- /wp:group -->

<!-- wp:comments -->
<div class="wp-block-comments"><!-- wp:comments-title /-->

<!-- wp:comment-template -->
<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"40px"} -->
<div class="wp-block-column" style="flex-basis:40px"><!-- wp:avatar {"size":40,"style":{"border":{"radius":"20px"}}} /--></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:comment-author-name {"fontSize":"small"} /-->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"layout":{"type":"flex"}} -->
<div class="wp-block-group" style="margin-top:0px;margin-bottom:0px"><!-- wp:comment-date {"fontSize":"small"} /-->

<!-- wp:comment-edit-link {"fontSize":"small"} /--></div>
<!-- /wp:group -->

<!-- wp:comment-content /-->

<!-- wp:comment-reply-link {"fontSize":"small"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:comment-template -->

<!-- wp:comments-pagination -->
<!-- wp:comments-pagination-previous /-->

<!-- wp:comments-pagination-numbers /-->

<!-- wp:comments-pagination-next /-->
<!-- /wp:comments-pagination -->

<!-- wp:post-comments-form /--></div>
<!-- /wp:comments --></main>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"30%","style":{"spacing":{"padding":{"right":"10px","left":"10px","top":"0px","bottom":"0px"},"blockGap":"24px"}}} -->
<div class="wp-block-column" style="padding-top:0px;padding-right:10px;padding-bottom:0px;padding-left:10px;flex-basis:30%"><!-- wp:template-part {"slug":"widget"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->