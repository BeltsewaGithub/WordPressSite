<?php
/**
 * Register block styles.
 * Register block pattern.
 * Custom Welcome Page.
 * Theme: TributeToGovPress
 */


add_action( 'init', 'tributetogovpress_register_block_styles' );

function tributetogovpress_register_block_styles() {
	register_block_style(
		'core/group',
		 array(
			'name'  => 'bordi-arrotondati',
			'label' => __( 'Rounded borders', 'tributetogovpress' ),
			'style_data' => array('border' => array('radius' => array('topLeft' => '5px', 'topRight' => '5px')))
		)
	);

	
}

function tributetogovpress_block_pattern() {
  register_block_pattern(
  'tributetogovpress/countyevent',
  	array(
		'title'      => __('County event', 'tributetogovpress'),
		'description'  => __('Poster for a conference on companion dogs.', 'tributetogovpress'),
		'categories' => array('banner',),
		'inserter' => 'true',
		'keywords' => array('county', 'event', 'text', 'banner',),
		'viewPortWidth' => '700',
		'content'    => '<!-- wp:group {"style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-color-2"}}},"spacing":{"padding":{"right":"10px","left":"10px","top":"5px","bottom":"5px"}},"border":{"radius":{"topLeft":"15px","topRight":"15px"}}},"backgroundColor":"custom-color-1","textColor":"custom-color-2","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-custom-color-2-color has-custom-color-1-background-color has-text-color has-background has-link-color" style="border-top-left-radius:15px;border-top-right-radius:15px;padding-top:5px;padding-right:10px;padding-bottom:5px;padding-left:10px"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:site-title {"textAlign":"center"} /-->
<!-- wp:heading {"textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-color-2"}}}},"textColor":"custom-color-2","fontSize":"x-large"} -->
<h2 class="wp-block-heading has-text-align-center has-custom-color-2-color has-text-color has-link-color has-x-large-font-size">' . __( 'Event of the week', 'tributetogovpress' ) . '</h2>
<!-- /wp:heading --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"5px","bottom":"5px","left":"10px","right":"10px"}}},"backgroundColor":"custom-color-2","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-custom-color-2-background-color has-background" style="padding-top:5px;padding-right:10px;padding-bottom:5px;padding-left:10px"><!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"48px"},"elements":{"link":{"color":{"text":"var:preset|color|custom-color-1"}}}},"textColor":"custom-color-1"} -->
<p class="has-custom-color-1-color has-text-color has-link-color" style="font-size:48px"><strong>' . __('WALLA WALLA EVENT', 'tributetogovpress' ) . '</strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"48px"},"elements":{"link":{"color":{"text":"var:preset|color|vivid-red"}}}},"textColor":"vivid-red"} -->
<p class="has-vivid-red-color has-text-color has-link-color" style="font-size:48px"><strong>' . __('WALLA WALLA EVENT', 'tributetogovpress' ) . '</strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"48px"},"elements":{"link":{"color":{"text":"var:preset|color|vivid-green-cyan"}}}},"textColor":"vivid-green-cyan"} -->
<p class="has-vivid-green-cyan-color has-text-color has-link-color" style="font-size:48px"><strong>' . __('WALLA WALLA EVENT', 'tributetogovpress' ) . '</strong></p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"40px"} -->
<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center">' . __('The highly esteemed Professor Canittu Bau will hold a conference entitled', 'tributetogovpress' ) . ' "<mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-custom-color-1-color">' . __('Our beloved dog friends', 'tributetogovpress' ) . '</mark>" ' . __('dedicated to all the friends of our four-legged friends', 'tributetogovpress' ) . '</h2>
<!-- /wp:heading -->

<!-- wp:spacer {"height":"25px"} -->
<div style="height:25px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:separator {"backgroundColor":"custom-color-3"} -->
<hr class="wp-block-separator has-text-color has-custom-color-3-color has-alpha-channel-opacity has-custom-color-3-background-color has-background"/>
<!-- /wp:separator -->

<!-- wp:heading {"level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-color-1"}}}},"textColor":"custom-color-1"} -->
<h4 class="wp-block-heading has-custom-color-1-color has-text-color has-link-color">' . __('The event will take place in the Walla Walla University Conference Room (*), Friday, October 14, at 10:00 PM', 'tributetogovpress' ) . '</h4>
<!-- /wp:heading -->

<!-- wp:spacer {"height":"60px"} -->
<div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-color-2"}}},"spacing":{"padding":{"right":"10px","left":"10px","top":"5px","bottom":"5px"}},"border":{"radius":{"bottomLeft":"15px","bottomRight":"15px"}}},"backgroundColor":"custom-color-1","textColor":"custom-color-2","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-custom-color-2-color has-custom-color-1-background-color has-text-color has-background has-link-color" style="border-bottom-left-radius:15px;border-bottom-right-radius:15px;padding-top:5px;padding-right:10px;padding-bottom:5px;padding-left:10px"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size">(*) <em>' . __('Address: 149B - Pinocchietti Marcellini avenue, East Riverside', 'tributetogovpress' ) . '</em>.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size">' . __('For further information, please contact the University secretary from 9am to 11am every weekday.', 'tributetogovpress' ) . '</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->',	

	)
);
}
 
add_action( 'init', 'tributetogovpress_block_pattern' );

function tributetogovpress_due_register_block_styles() {
	$blocks = array( 'image', 'post-featured-image' );

	foreach( $blocks as $block ) {

		register_block_style(
			'core/' . $block,
			array(
				'name'         => 'tributetogovpress-grayscale',
				'label'        => __( 'Grayscale', 'tributetogovpress' ),
				'inline_style' => '.is-style-tributetogovpress-grayscale{ filter: grayscale(100%); }',
			)
		);
	
		register_block_style(
			'core/' . $block,
			array(
				'name'         => 'tributetogovpress-blur',
				'label'        => __( 'Blur', 'tributetogovpress' ),
				'inline_style' => '.is-style-tributetogovpress-blur{ filter: blur(5px); }',
			)
		);

		register_block_style(
			'core/' . $block,
			array(
				'name'         => 'tributetogovpress-brightness',
				'label'        => __( 'Brightness', 'tributetogovpress' ),
				'inline_style' => '.is-style-tributetogovpress-brightness{ filter: brightness(200%); }',
			)
		);

		register_block_style(
			'core/' . $block,
			array(
				'name'         => 'tributetogovpress-contrast',
				'label'        => __( 'Contrast', 'tributetogovpress' ),
				'inline_style' => '.is-style-tributetogovpress-contrast{ filter: contrast(200%); }',
			)
		);

		register_block_style(
			'core/' . $block,
			array(
				'name'         => 'tributetogovpress-hue-90',
				'label'        => __( 'Hue-90', 'tributetogovpress' ),
				'inline_style' => '.is-style-tributetogovpress-hue-90{ filter: hue-rotate(90deg); }',
			)
		);

		register_block_style(
			'core/' . $block,
			array(
				'name'         => 'tributetogovpress-hue-180',
				'label'        => __( 'Hue-180', 'tributetogovpress' ),
				'inline_style' => '.is-style-tributetogovpress-hue-180{ filter: hue-rotate(180deg); }',
			)
		);

		register_block_style(
			'core/' . $block,
			array(
				'name'         => 'tributetogovpress-hue-270',
				'label'        => __( 'Hue-270', 'tributetogovpress' ),
				'inline_style' => '.is-style-tributetogovpress-hue-270{ filter: hue-rotate(270deg); }',
			)
		);

		register_block_style(
			'core/' . $block,
			array(
				'name'         => 'tributetogovpress-invert',
				'label'        => __( 'Invert', 'tributetogovpress' ),
				'inline_style' => '.is-style-tributetogovpress-invert{ filter: invert(100%); }',
			)
		);

		register_block_style(
			'core/' . $block,
			array(
				'name'         => 'tributetogovpress-opacity',
				'label'        => __( 'Opacity', 'tributetogovpress' ),
				'inline_style' => '.is-style-tributetogovpress-opacity{ filter: opacity(30%); }',
			)
		);

		register_block_style(
			'core/' . $block,
			array(
				'name'         => 'tributetogovpress-saturate',
				'label'        => __( 'Saturate', 'tributetogovpress' ),
				'inline_style' => '.is-style-tributetogovpress-saturate{ filter: saturate(8); }',
			)
		);

		register_block_style(
			'core/' . $block,
			array(
				'name'         => 'tributetogovpress-sepia',
				'label'        => __( 'Sepia', 'tributetogovpress' ),
				'inline_style' => '.is-style-tributetogovpress-sepia{ filter: sepia(100%); }',
			)
		);

		register_block_style(
			'core/' . $block,
			array(
				'name'         => 'tributetogovpress-fromgray',
				'label'        => __( 'Gray →', 'tributetogovpress' ),
				'inline_style' => '.is-style-tributetogovpress-fromgray { filter: grayscale(100%); } .is-style-tributetogovpress-fromgray:hover { filter: grayscale(0%); }',
			)
		);

		register_block_style(
			'core/' . $block,
			array(
				'name'         => 'tributetogovpress-togray',
				'label'        => __( '→ Gray', 'tributetogovpress' ),
				'inline_style' => '.is-style-tributetogovpress-togray:hover { filter: grayscale(100%); }',
			)
		);

		register_block_style(
			'core/' . $block,
			array(
				'name'         => 'tributetogovpress-fromblur',
				'label'        => __( 'Blur →', 'tributetogovpress' ),
				'inline_style' => '.is-style-tributetogovpress-fromblur { filter: blur(5px); } .is-style-tributetogovpress-fromblur:hover { filter: none; }',
			)
		);

		register_block_style(
			'core/' . $block,
			array(
				'name'         => 'tributetogovpress-toblur',
				'label'        => __( '→ Blur', 'tributetogovpress' ),
				'inline_style' => '.is-style-tributetogovpress-toblur:hover { filter: blur(5px); }',
			)
		);

		register_block_style(
			'core/' . $block,
			array(
				'name'         => 'tributetogovpress-frombrightness',
				'label'        => __( 'Brightness →', 'tributetogovpress' ),
				'inline_style' => '.is-style-tributetogovpress-frombrightness { filter: brightness(200%); } .is-style-tributetogovpress-frombrightness:hover { filter: none; }',
			)
		);

		register_block_style(
			'core/' . $block,
			array(
				'name'         => 'tributetogovpress-tobrightness',
				'label'        => __( '→ Brightness', 'tributetogovpress' ),
				'inline_style' => '.is-style-tributetogovpress-tobrightness:hover { filter: brightness(200%); }',
			)
		);

		register_block_style(
			'core/' . $block,
			array(
				'name'         => 'tributetogovpress-fromcontrast',
				'label'        => __( 'Contrast →', 'tributetogovpress' ),
				'inline_style' => '.is-style-tributetogovpress-fromcontrast { filter: contrast(200%); } .is-style-tributetogovpress-fromcontrast:hover { filter: none; }',
			)
		);

		register_block_style(
			'core/' . $block,
			array(
				'name'         => 'tributetogovpress-tocontrast',
				'label'        => __( '→ Contrast', 'tributetogovpress' ),
				'inline_style' => '.is-style-tributetogovpress-tocontrast:hover { filter: contrast(200%); }',
			)
		);

		register_block_style(
			'core/' . $block,
			array(
				'name'         => 'tributetogovpress-fromhue90',
				'label'        => __( 'Hue90 →', 'tributetogovpress' ),
				'inline_style' => '.is-style-tributetogovpress-fromhue90 { filter: hue-rotate(90deg); } .is-style-tributetogovpress-fromhue90:hover { filter: none; }',
			)
		);

		register_block_style(
			'core/' . $block,
			array(
				'name'         => 'tributetogovpress-tohue90',
				'label'        => __( '→ Hue90', 'tributetogovpress' ),
				'inline_style' => '.is-style-tributetogovpress-tohue90:hover { filter: hue-rotate(90deg); }',
			)
		);

		register_block_style(
			'core/' . $block,
			array(
				'name'         => 'tributetogovpress-fromhue180',
				'label'        => __( 'Hue180 →', 'tributetogovpress' ),
				'inline_style' => '.is-style-tributetogovpress-fromhue180 { filter: hue-rotate(180deg); } .is-style-tributetogovpress-fromhue180:hover { filter: none; }',
			)
		);

		register_block_style(
			'core/' . $block,
			array(
				'name'         => 'tributetogovpress-tohue180',
				'label'        => __( '→ Hue180', 'tributetogovpress' ),
				'inline_style' => '.is-style-tributetogovpress-tohue180:hover { filter: hue-rotate(180deg); }',
			)
		);

		register_block_style(
			'core/' . $block,
			array(
				'name'         => 'tributetogovpress-fromhue270',
				'label'        => __( 'Hue270 →', 'tributetogovpress' ),
				'inline_style' => '.is-style-tributetogovpress-fromhue270 { filter: hue-rotate(270deg); } .is-style-tributetogovpress-fromhue270:hover { filter: none; }',
			)
		);

		register_block_style(
			'core/' . $block,
			array(
				'name'         => 'tributetogovpress-tohue270',
				'label'        => __( '→ Hue270', 'tributetogovpress' ),
				'inline_style' => '.is-style-tributetogovpress-tohue270:hover { filter: hue-rotate(270deg); }',
			)
		);

		register_block_style(
			'core/' . $block,
			array(
				'name'         => 'tributetogovpress-frominvert',
				'label'        => __( 'Invert →', 'tributetogovpress' ),
				'inline_style' => '.is-style-tributetogovpress-frominvert { filter: invert(100%); } .is-style-tributetogovpress-frominvert:hover { filter: none; }',
			)
		);

		register_block_style(
			'core/' . $block,
			array(
				'name'         => 'tributetogovpress-toinvert',
				'label'        => __( '→ Invert', 'tributetogovpress' ),
				'inline_style' => '.is-style-tributetogovpress-toinvert:hover { filter: invert(100%); }',
			)
		);

		register_block_style(
			'core/' . $block,
			array(
				'name'         => 'tributetogovpress-fromopacity',
				'label'        => __( 'Opacity →', 'tributetogovpress' ),
				'inline_style' => '.is-style-tributetogovpress-fromopacity { filter: opacity(30%); } .is-style-tributetogovpress-fromopacity:hover { filter: none; }',
			)
		);

		register_block_style(
			'core/' . $block,
			array(
				'name'         => 'tributetogovpress-toopacity',
				'label'        => __( '→ Opacity', 'tributetogovpress' ),
				'inline_style' => '.is-style-tributetogovpress-toopacity:hover { filter: opacity(30%); }',
			)
		);

		register_block_style(
			'core/' . $block,
			array(
				'name'         => 'tributetogovpress-fromsaturate',
				'label'        => __( 'Saturate →', 'tributetogovpress' ),
				'inline_style' => '.is-style-tributetogovpress-fromsaturate { filter: saturate(8); } .is-style-tributetogovpress-fromsaturate:hover { filter: none; }',
			)
		);

		register_block_style(
			'core/' . $block,
			array(
				'name'         => 'tributetogovpress-tosaturate',
				'label'        => __( '→ Saturate', 'tributetogovpress' ),
				'inline_style' => '.is-style-tributetogovpress-tosaturate:hover { filter: saturate(8); }',
			)
		);

		register_block_style(
			'core/' . $block,
			array(
				'name'         => 'tributetogovpress-fromsepia',
				'label'        => __( 'Sepia →', 'tributetogovpress' ),
				'inline_style' => '.is-style-tributetogovpress-fromsepia { filter: sepia(100%); } .is-style-tributetogovpress-fromsepia:hover { filter: none; }',
			)
		);

		register_block_style(
			'core/' . $block,
			array(
				'name'         => 'tributetogovpress-tosepia',
				'label'        => __( '→ Sepia', 'tributetogovpress' ),
				'inline_style' => '.is-style-tributetogovpress-tosepia:hover { filter: sepia(100%); }',
			)
		);

	}
}

add_action( 'init', 'tributetogovpress_due_register_block_styles' );

function tributetogovpress_due_wp_custom_welcome_page() {
	
	 include(get_template_directory() .'/assets/benvenuto/benvenuto.php');

}

function tributetogovpress_due_wp_custom_welcome_menu() {
    add_menu_page(
        __( 'Welcome', 'tributetogovpress' ),
        __( 'Welcome', 'tributetogovpress' ),
        'edit_posts', /* min Author role */
        'custom-welcome',
        'tributetogovpress_due_wp_custom_welcome_page',
        'dashicons-welcome-learn-more',
        3
    );
}
add_action( 'admin_menu', 'tributetogovpress_due_wp_custom_welcome_menu' );
