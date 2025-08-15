<?php
/**
 * Title: archive
 * Slug: tributetogovpress/archive
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:group {"style":{"spacing":{"padding":{"right":"24px","left":"24px"}},"dimensions":{"minHeight":"50vh"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="min-height:50vh;padding-right:24px;padding-left:24px"><!-- wp:group {"align":"wide","style":{"border":{"radius":"5px"},"spacing":{"padding":{"right":"24px","left":"24px","top":"24px","bottom":"24px"}}},"backgroundColor":"white","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide has-white-background-color has-background" style="border-radius:5px;padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px"><!-- wp:columns {"align":"wide","textColor":"custom-color-3"} -->
<div class="wp-block-columns alignwide has-custom-color-3-color has-text-color"><!-- wp:column {"width":"70%","style":{"spacing":{"padding":{"right":"10px","left":"10px"},"blockGap":"10px"}}} -->
<div class="wp-block-column" style="padding-right:10px;padding-left:10px;flex-basis:70%"><!-- wp:group {"tagName":"main","align":"wide","style":{"border":{"radius":"5px"}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group alignwide" style="border-radius:5px"><!-- wp:query-title {"type":"archive"} /-->

<!-- wp:query {"queryId":109,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:post-title {"isLink":true} /-->

<!-- wp:post-date /-->

<!-- wp:post-excerpt {"excerptLength":30} /-->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"placeholder":"Aggiungi testo o blocchi da visualizzare quando la query non restituisce alcun risultato."} -->
<p><?php esc_html_e('Not found', 'tributetogovpress');?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></main>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"30%","style":{"spacing":{"padding":{"right":"10px","left":"10px","top":"0px","bottom":"0px"},"blockGap":"24px"}}} -->
<div class="wp-block-column" style="padding-top:0px;padding-right:10px;padding-bottom:0px;padding-left:10px;flex-basis:30%"><!-- wp:template-part {"slug":"widget","area":"uncategorized"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->