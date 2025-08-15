<?php
/**
 * Register block styles.
 * Theme: Mondrian
 */


add_action( 'init', 'mondrian_register_block_styles' );

function mondrian_register_block_styles() {
	register_block_style(
		'core/group',
		 array(
			'name'  => 'sfondo-blu',
			'label' => __( 'Sfondo Blu', 'mondrian' ),
			'style_data' => array(
				'color'    => array(
					'background' => 'blue',
				),
			)
		)
	);
	

	register_block_style(
		'core/group',
		 array(
			'name'  => 'sfondo-giallo',
			'label' => __( 'Sfondo Giallo', 'mondrian' ),
			'style_data' => array(
				'color'    => array(
					'background' => 'yellow',
				),
			)
		)
	);
	
		register_block_style(
		'core/group',
		 array(
			'name'  => 'sfondo-rosso',
			'label' => __( 'Sfondo Rosso', 'mondrian' ),
			'style_data' => array(
				'color'    => array(
					'background' => 'red',
				),
			)
		)
	);
	
		register_block_style(
		'core/group',
		 array(
			'name'  => 'sfondo-nero',
			'label' => __( 'Sfondo Nero', 'mondrian' ),
			'style_data' => array(
				'color'    => array(
					'background' => 'black',
				),
			)
		)
	);
}

function mondrian_due_register_block_styles() {
	$blocks = array( 'image', 'post-featured-image' );

	foreach( $blocks as $block ) {

		register_block_style(
			'core/' . $block,
			array(
				'name'         => 'mondrian-grayscale',
				'label'        => __( 'Grayscale', 'mondrian' ),
				'inline_style' => '.is-style-mondrian-grayscale{ filter: grayscale(100%); }',
			)
		);
	
		register_block_style(
			'core/' . $block,
			array(
				'name'         => 'mondrian-blur',
				'label'        => __( 'Blur', 'mondrian' ),
				'inline_style' => '.is-style-mondrian-blur{ filter: blur(5px); }',
			)
		);

		register_block_style(
			'core/' . $block,
			array(
				'name'         => 'mondrian-brightness',
				'label'        => __( 'Brightness', 'mondrian' ),
				'inline_style' => '.is-style-mondrian-brightness{ filter: brightness(200%); }',
			)
		);

		register_block_style(
			'core/' . $block,
			array(
				'name'         => 'mondrian-contrast',
				'label'        => __( 'Contrast', 'mondrian' ),
				'inline_style' => '.is-style-mondrian-contrast{ filter: contrast(200%); }',
			)
		);

		register_block_style(
			'core/' . $block,
			array(
				'name'         => 'mondrian-hue-90',
				'label'        => __( 'Hue-90', 'mondrian' ),
				'inline_style' => '.is-style-mondrian-hue-90{ filter: hue-rotate(90deg); }',
			)
		);

		register_block_style(
			'core/' . $block,
			array(
				'name'         => 'mondrian-hue-180',
				'label'        => __( 'Hue-180', 'mondrian' ),
				'inline_style' => '.is-style-mondrian-hue-180{ filter: hue-rotate(180deg); }',
			)
		);

		register_block_style(
			'core/' . $block,
			array(
				'name'         => 'mondrian-hue-270',
				'label'        => __( 'Hue-270', 'mondrian' ),
				'inline_style' => '.is-style-mondrian-hue-270{ filter: hue-rotate(270deg); }',
			)
		);

		register_block_style(
			'core/' . $block,
			array(
				'name'         => 'mondrian-invert',
				'label'        => __( 'Invert', 'mondrian' ),
				'inline_style' => '.is-style-mondrian-invert{ filter: invert(100%); }',
			)
		);

		register_block_style(
			'core/' . $block,
			array(
				'name'         => 'mondrian-opacity',
				'label'        => __( 'Opacity', 'mondrian' ),
				'inline_style' => '.is-style-mondrian-opacity{ filter: opacity(30%); }',
			)
		);

		register_block_style(
			'core/' . $block,
			array(
				'name'         => 'mondrian-saturate',
				'label'        => __( 'Saturate', 'mondrian' ),
				'inline_style' => '.is-style-mondrian-saturate{ filter: saturate(8); }',
			)
		);

		register_block_style(
			'core/' . $block,
			array(
				'name'         => 'mondrian-sepia',
				'label'        => __( 'Sepia', 'mondrian' ),
				'inline_style' => '.is-style-mondrian-sepia{ filter: sepia(100%); }',
			)
		);

		register_block_style(
			'core/' . $block,
			array(
				'name'         => 'mondrian-fromgray',
				'label'        => __( 'Gray →', 'mondrian' ),
				'inline_style' => '.is-style-mondrian-fromgray { filter: grayscale(100%); } .is-style-mondrian-fromgray:hover { filter: grayscale(0%); }',
			)
		);

		register_block_style(
			'core/' . $block,
			array(
				'name'         => 'mondrian-togray',
				'label'        => __( '→ Gray', 'mondrian' ),
				'inline_style' => '.is-style-mondrian-togray:hover { filter: grayscale(100%); }',
			)
		);

		register_block_style(
			'core/' . $block,
			array(
				'name'         => 'mondrian-fromblur',
				'label'        => __( 'Blur →', 'mondrian' ),
				'inline_style' => '.is-style-mondrian-fromblur { filter: blur(5px); } .is-style-mondrian-fromblur:hover { filter: none; }',
			)
		);

		register_block_style(
			'core/' . $block,
			array(
				'name'         => 'mondrian-toblur',
				'label'        => __( '→ Blur', 'mondrian' ),
				'inline_style' => '.is-style-mondrian-toblur:hover { filter: blur(5px); }',
			)
		);

		register_block_style(
			'core/' . $block,
			array(
				'name'         => 'mondrian-frombrightness',
				'label'        => __( 'Brightness →', 'mondrian' ),
				'inline_style' => '.is-style-mondrian-frombrightness { filter: brightness(200%); } .is-style-mondrian-frombrightness:hover { filter: none; }',
			)
		);

		register_block_style(
			'core/' . $block,
			array(
				'name'         => 'mondrian-tobrightness',
				'label'        => __( '→ Brightness', 'mondrian' ),
				'inline_style' => '.is-style-mondrian-tobrightness:hover { filter: brightness(200%); }',
			)
		);

		register_block_style(
			'core/' . $block,
			array(
				'name'         => 'mondrian-fromcontrast',
				'label'        => __( 'Contrast →', 'mondrian' ),
				'inline_style' => '.is-style-mondrian-fromcontrast { filter: contrast(200%); } .is-style-mondrian-fromcontrast:hover { filter: none; }',
			)
		);

		register_block_style(
			'core/' . $block,
			array(
				'name'         => 'mondrian-tocontrast',
				'label'        => __( '→ Contrast', 'mondrian' ),
				'inline_style' => '.is-style-mondrian-tocontrast:hover { filter: contrast(200%); }',
			)
		);

		register_block_style(
			'core/' . $block,
			array(
				'name'         => 'mondrian-fromhue90',
				'label'        => __( 'Hue90 →', 'mondrian' ),
				'inline_style' => '.is-style-mondrian-fromhue90 { filter: hue-rotate(90deg); } .is-style-mondrian-fromhue90:hover { filter: none; }',
			)
		);

		register_block_style(
			'core/' . $block,
			array(
				'name'         => 'mondrian-tohue90',
				'label'        => __( '→ Hue90', 'mondrian' ),
				'inline_style' => '.is-style-mondrian-tohue90:hover { filter: hue-rotate(90deg); }',
			)
		);

		register_block_style(
			'core/' . $block,
			array(
				'name'         => 'mondrian-fromhue180',
				'label'        => __( 'Hue180 →', 'mondrian' ),
				'inline_style' => '.is-style-mondrian-fromhue180 { filter: hue-rotate(180deg); } .is-style-mondrian-fromhue180:hover { filter: none; }',
			)
		);

		register_block_style(
			'core/' . $block,
			array(
				'name'         => 'mondrian-tohue180',
				'label'        => __( '→ Hue180', 'mondrian' ),
				'inline_style' => '.is-style-mondrian-tohue180:hover { filter: hue-rotate(180deg); }',
			)
		);

		register_block_style(
			'core/' . $block,
			array(
				'name'         => 'mondrian-fromhue270',
				'label'        => __( 'Hue270 →', 'mondrian' ),
				'inline_style' => '.is-style-mondrian-fromhue270 { filter: hue-rotate(270deg); } .is-style-mondrian-fromhue270:hover { filter: none; }',
			)
		);

		register_block_style(
			'core/' . $block,
			array(
				'name'         => 'mondrian-tohue270',
				'label'        => __( '→ Hue270', 'mondrian' ),
				'inline_style' => '.is-style-mondrian-tohue270:hover { filter: hue-rotate(270deg); }',
			)
		);

		register_block_style(
			'core/' . $block,
			array(
				'name'         => 'mondrian-frominvert',
				'label'        => __( 'Invert →', 'mondrian' ),
				'inline_style' => '.is-style-mondrian-frominvert { filter: invert(100%); } .is-style-mondrian-frominvert:hover { filter: none; }',
			)
		);

		register_block_style(
			'core/' . $block,
			array(
				'name'         => 'mondrian-toinvert',
				'label'        => __( '→ Invert', 'mondrian' ),
				'inline_style' => '.is-style-mondrian-toinvert:hover { filter: invert(100%); }',
			)
		);

		register_block_style(
			'core/' . $block,
			array(
				'name'         => 'mondrian-fromopacity',
				'label'        => __( 'Opacity →', 'mondrian' ),
				'inline_style' => '.is-style-mondrian-fromopacity { filter: opacity(30%); } .is-style-mondrian-fromopacity:hover { filter: none; }',
			)
		);

		register_block_style(
			'core/' . $block,
			array(
				'name'         => 'mondrian-toopacity',
				'label'        => __( '→ Opacity', 'mondrian' ),
				'inline_style' => '.is-style-mondrian-toopacity:hover { filter: opacity(30%); }',
			)
		);

		register_block_style(
			'core/' . $block,
			array(
				'name'         => 'mondrian-fromsaturate',
				'label'        => __( 'Saturate →', 'mondrian' ),
				'inline_style' => '.is-style-mondrian-fromsaturate { filter: saturate(8); } .is-style-mondrian-fromsaturate:hover { filter: none; }',
			)
		);

		register_block_style(
			'core/' . $block,
			array(
				'name'         => 'mondrian-tosaturate',
				'label'        => __( '→ Saturate', 'mondrian' ),
				'inline_style' => '.is-style-mondrian-tosaturate:hover { filter: saturate(8); }',
			)
		);

		register_block_style(
			'core/' . $block,
			array(
				'name'         => 'mondrian-fromsepia',
				'label'        => __( 'Sepia →', 'mondrian' ),
				'inline_style' => '.is-style-mondrian-fromsepia { filter: sepia(100%); } .is-style-mondrian-fromsepia:hover { filter: none; }',
			)
		);

		register_block_style(
			'core/' . $block,
			array(
				'name'         => 'mondrian-tosepia',
				'label'        => __( '→ Sepia', 'mondrian' ),
				'inline_style' => '.is-style-mondrian-tosepia:hover { filter: sepia(100%); }',
			)
		);

	}
}

add_action( 'init', 'mondrian_due_register_block_styles' );

function mondrian_wp_custom_welcome_page() {
	
	 include(get_template_directory() .'/assets/benvenuto/benvenuto.php');

}

function mondrian_wp_custom_welcome_menu() {
    add_menu_page(
        __( 'Welcome', 'mondrian' ),
        __( 'Welcome', 'mondrian' ),
        'edit_posts', /* min Author role */
        'custom-welcome',
        'mondrian_wp_custom_welcome_page',
        'dashicons-welcome-learn-more',
        3
    );
}
add_action( 'admin_menu', 'mondrian_wp_custom_welcome_menu' );
