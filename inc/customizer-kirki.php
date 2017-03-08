<?php
function mst_panels_sections( $wp_customize ) {
	/*--------------------------------------------------
	=========== Default Color setting ============
	------------------------------------------------*/
	$wp_customize->add_section( 'mst_defaultcolor_settings', array(
		'title'       			=> __( 'Color', 'mst' ),
		'priority'    			=> 10,
	) );

	/*--------------------------------------------------
	=========== Header setting ============
	------------------------------------------------*/
	$wp_customize->add_section( 'mst_header_settings', array(
		'title'       			=> __( 'Header', 'mst' ),
		'priority'    			=> 10,
	) );

	/*--------------------------------------------------
	=========== Social Media setting ============
	------------------------------------------------*/
	$wp_customize->add_section( 'mst_social_settings', array(
		'title'					=> __( 'Social Media', 'mst' ),
		'priority'    			=> 10,
	) );

	/*--------------------------------------------------
	=========== Headline Text setting ============
	------------------------------------------------*/
	$wp_customize->add_section( 'mst_headline_settings', array(
		'title'					=> __( 'Headline Text', 'mst' ),
		'priority'    			=> 10,
	) );

	/*--------------------------------------------------
	===========Disclaimer Text  setting ============
	------------------------------------------------*/
	$wp_customize->add_section( 'mst_disclaimer_settings', array(
		'title'					=> __( 'Disclaimer Text', 'mst' ),
		'priority'    			=> 10,
	) );

}
add_action( 'customize_register', 'mst_panels_sections' );



function mst_fields( $fields ) {

	/*------------------------ Default Color --------------------------------*/
	$fields[] = array(
		'type'					=> 'multicolor',
		'section'     			=> 'mst_defaultcolor_settings',
		'priority'    			=> 10,
		'settings'    			=> 'mst_default_color',
		'label'       			=> esc_attr__( 'Default Site Color ', 'mst' ),
		'description'			=> esc_attr__( 'Change site header & footer color.', 'mst' ),
		'choices'     			=> array(
			'default_color'    		=> esc_attr__( '', 'mst' )
		),
		'default'     			=> array(
			'default_color'    		=> '#1E3F7C'
		),
	);

	/*------------------------ Header Top Bar --------------------------------*/
	$fields[] = array(
		'type'					=> 'multicolor',
		'section'     			=> 'mst_header_settings',
		'priority'    			=> 10,
		'settings'    			=> 'mst_header_bg',
		'label'       			=> esc_attr__( 'Background color ', 'mst' ),
		'description'			=> esc_attr__( 'Change background color of header.', 'mst' ),
		'choices'     			=> array(
			'header_bg'    		=> esc_attr__( '', 'mst' )
		),
		'default'     			=> array(
			'header_bg'    		=> '#000000'
		),
	);

	$fields[] = array(
		'type'        			=> 'text',
		'section'    			=> 'mst_header_settings',
		'priority'    			=> 10,
		'settings'    			=> 'mst_header_phone',
		'label'       			=> esc_attr__( 'Phone Number', 'mst' ),
		'description'			=> esc_attr__( 'Change Phone Number of header.', 'mst' ),
		'default'     			=> '416-817-8787',
	);

	/*------------------------ Social Media --------------------------------*/
	$fields[] = array(
		'type'        			=> 'repeater',
		'label'		  			=> esc_attr__( 'Social media', 'mst' ),
		'section'     			=> 'mst_social_settings',
		'priority'    			=> 10,
		'settings'    			=> 'mst_social',
		'row_label' 			=> array(
			'type'  			=> 'field',
			'value' 			=> esc_attr__('Social ', 'mst' ),
			'field' 			=> 'icon',
		),
		'default'     			=> array(
			array(
				'icon' 			=> esc_attr__( 'fa-facebook', 'mst' ),
				'link'  		=> '#',
			)
		),
		'fields' 				=> array(
			'icon' 				=> array(
				'type'        	=> 'text',
				'description'	=> esc_attr__( 'Ionicons/Font Awesome Icon Class', 'mst' ),
				'default'    	=> 'fa-facebook',
			),
			'link' 				=> array(
				'type'        	=> 'url',
				'description'	=> esc_attr__( 'Social Url', 'mst' ),
				'default'     	=> '#',
			)
		)
	);
	
	$fields[] = array(
		'type'        			=> 'toggle',
		'section'    			=> 'mst_social_settings',
		'priority'    			=> 10,
		'settings'    			=> 'mst_social_switcher',
		'label'       			=> esc_attr__( 'Show / Hide', 'mst' ),
		'default'     			=> '1',
	);

	/*------------------------ Headline Text --------------------------------*/

	$fields[] = array(
		'type'        			=> 'textarea',
		'section'    			=> 'mst_headline_settings',
		'priority'    			=> 10,
		'settings'    			=> 'mst_headline',
		'label'       			=> esc_attr__( 'Headline Text', 'mst' ),
		'default'     			=> 'HEADLINE TEXT. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
		'tooltip'				=> 'This headline text is homepage sub heading text.',
	);

	$fields[] = array(
		'type'        			=> 'toggle',
		'section'    			=> 'mst_headline_settings',
		'priority'    			=> 10,
		'settings'    			=> 'mst_headline_switcher',
		'label'       			=> esc_attr__( 'Show / Hide', 'mst' ),
		'default'     			=> '1',
	);

	$fields[] = array(
		'type'        			=> 'spacing',
		'section'     			=> 'mst_headline_settings',
		'priority'    			=> 10,
		'settings'    			=> 'mst_headline_spacing',
		'label'       			=> __( 'Spacing Control', 'mst' ),
		'default'     			=> array(
			'top'    			=> '0px',
			'bottom' 			=> '60px',
			'left'   			=> '0px',
			'right'  			=> '0px',
		),
	);

	$fields[] = array(
		'type'        			=> 'typography',
		'section'     			=> 'mst_headline_settings',
		'priority'    			=> 10,
		'settings'    			=> 'mst_headline_typography',
		'label'       			=> esc_attr__( 'Headline Typography', 'mst' ),
		'default'     			=> array(
			'font-family'    	=> 'Arial',
			'variant'        	=> 'regular',
			'font-size'      	=> '18px',
			'line-height'    	=> '1.5',
			'letter-spacing' 	=> '0',
			'color'          	=> '#ca0c26',
			'text-transform' 	=> 'uppercase',
			'text-align'     	=> 'center'
		),
		'output'      			=> array(
			array(
				'element' 		=> '.category-list .sub-heading > p',
			),
		),
	);

	/*------------------------ Disclaimer Text --------------------------------*/

	$fields[] = array(
		'type'        			=> 'textarea',
		'section'    			=> 'mst_disclaimer_settings',
		'priority'    			=> 10,
		'settings'    			=> 'mst_disclaimer',
		'label'       			=> esc_attr__( 'Disclaimer Text', 'mst' ),
		'default'     			=> 'Tickets in limited quantities',
	);

	$fields[] = array(
		'type'        			=> 'toggle',
		'section'    			=> 'mst_disclaimer_settings',
		'priority'    			=> 10,
		'settings'    			=> 'mst_disclaimer_switcher',
		'label'       			=> esc_attr__( 'Show / Hide', 'mst' ),
		'default'     			=> '1',
	);

	$fields[] = array(
		'type'        			=> 'spacing',
		'section'     			=> 'mst_disclaimer_settings',
		'priority'    			=> 10,
		'settings'    			=> 'mst_disclaimer_spacing',
		'label'       			=> __( 'Spacing Control', 'mst' ),
		'default'     			=> array(
			'top'    			=> '40px',
			'bottom' 			=> '150px',
			'left'   			=> '0px',
			'right'  			=> '0px',
		),
	);

	$fields[] = array(
		'type'        			=> 'typography',
		'section'     			=> 'mst_disclaimer_settings',
		'priority'    			=> 10,
		'settings'    			=> 'mst_disclaimer_typography',
		'label'       			=> esc_attr__( 'Headline Typography', 'mst' ),
		'default'     			=> array(
			'font-family'    	=> 'Open Sans',
			'variant'        	=> '600',
			'font-size'      	=> '20px',
			'line-height'    	=> '1.1',
			'letter-spacing' 	=> '0',
			'color'          	=> '#898987',
			'text-transform' 	=> 'none',
			'text-align'     	=> 'center'
		),
		'output'      			=> array(
			array(
				'element' 		=> '.category-list .category-item-footer',
			),
		),
	);

	return $fields;
}

add_filter( 'kirki/fields', 'mst_fields' );
