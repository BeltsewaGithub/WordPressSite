<?php
/**
 * Title: 404
 * Slug: tributetogovpress/404
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:group {"style":{"spacing":{"padding":{"right":"24px","left":"24px"}},"dimensions":{"minHeight":"50vh"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="min-height:50vh;padding-right:24px;padding-left:24px"><!-- wp:group {"align":"wide","style":{"border":{"radius":"5px"},"spacing":{"padding":{"right":"24px","left":"24px","top":"24px","bottom":"24px"}}},"backgroundColor":"white","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide has-white-background-color has-background" style="border-radius:5px;padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px"><!-- wp:columns {"align":"wide","textColor":"custom-color-3"} -->
<div class="wp-block-columns alignwide has-custom-color-3-color has-text-color"><!-- wp:column {"width":"70%","style":{"spacing":{"padding":{"right":"10px","left":"10px"},"blockGap":"10px"}}} -->
<div class="wp-block-column" style="padding-right:10px;padding-left:10px;flex-basis:70%"><!-- wp:group {"tagName":"main","align":"wide","style":{"border":{"radius":"5px"}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group alignwide" style="border-radius:5px"><!-- wp:heading {"style":{"spacing":{"padding":{"top":"24px","bottom":"24px"}}}} -->
<h2 class="wp-block-heading" style="padding-top:24px;padding-bottom:24px"><?php esc_html_e('That page can’t be found.', 'tributetogovpress');?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"medium"} -->
<p class="has-medium-font-size"><?php esc_html_e('It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'tributetogovpress');?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"border":{"radius":"5px"},"spacing":{"padding":{"top":"24px","bottom":"24px","left":"24px","right":"24px"}}},"backgroundColor":"custom-color-2","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-custom-color-2-background-color has-background" style="border-radius:5px;padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px"><!-- wp:search {"label":"Cerca","showLabel":false,"buttonText":"Cerca","buttonPosition":"button-inside","buttonUseIcon":true,"style":{"border":{"radius":"5px"}}} /--></div>
<!-- /wp:group --></main>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"spacing":{"padding":{"left":"24px","right":"24px"}}},"fontSize":"medium"} -->
<p class="has-medium-font-size" style="padding-right:24px;padding-left:24px"><?php esc_html_e('Recent posts', 'tributetogovpress');?></p>
<!-- /wp:paragraph -->

<!-- wp:latest-posts {"style":{"spacing":{"padding":{"top":"12px","bottom":"12px","left":"24px","right":"24px"}}},"fontSize":"medium"} /-->

<!-- wp:paragraph {"style":{"spacing":{"padding":{"left":"24px","right":"24px"}}},"fontSize":"medium"} -->
<p class="has-medium-font-size" style="padding-right:24px;padding-left:24px"><?php esc_html_e('Tags Cloud', 'tributetogovpress');?></p>
<!-- /wp:paragraph -->

<!-- wp:tag-cloud {"style":{"spacing":{"padding":{"right":"24px","left":"24px","top":"12px","bottom":"12px"}}}} /-->

<!-- wp:paragraph {"style":{"spacing":{"padding":{"left":"24px","right":"24px"}}},"fontSize":"medium"} -->
<p class="has-medium-font-size" style="padding-right:24px;padding-left:24px"><?php esc_html_e('Categories Cloud', 'tributetogovpress');?></p>
<!-- /wp:paragraph -->

<!-- wp:tag-cloud {"taxonomy":"category","style":{"spacing":{"padding":{"right":"24px","left":"24px","top":"12px","bottom":"12px"}}}} /--></div>
<!-- /wp:column -->

<!-- wp:column {"width":"30%","style":{"spacing":{"padding":{"right":"10px","left":"10px","top":"0px","bottom":"0px"},"blockGap":"24px"}}} -->
<div class="wp-block-column" style="padding-top:0px;padding-right:10px;padding-bottom:0px;padding-left:10px;flex-basis:30%"><!-- wp:template-part {"slug":"widget","area":"uncategorized"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->