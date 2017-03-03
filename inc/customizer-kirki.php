<?php
function mst_panels_sections( $wp_customize ) {
	/*--------------------------------------------------
	===========Header setting ============
	------------------------------------------------*/
	$wp_customize->add_section( 'mst_header_settings', array(
		'title'       => __( 'Header', 'mst' ),
		'priority'    => 10,
	) );

}
add_action( 'customize_register', 'mst_panels_sections' );



function mst_fields( $fields ) {

	/*------------------------ Header Top Bar --------------------------------*/
	$fields[] = array(
		'type'        => 'multicolor',
		'section'     => 'mst_header_settings',
		'priority'    => 10,
		'settings'    => 'mst_header_bg',
		'label'       => esc_attr__( 'Background color ', 'mst' ),
		'description'	=> esc_attr__( 'Change background color of header.', 'mst' ),
		'choices'     => array(
			'header_bg'    => esc_attr__( '', 'mst' )
		),
		'default'     => array(
			'header_bg'    => '#000000'
		),
	);

	$fields[] = array(
		'type'        => 'text',
		'section'    => 'mst_header_settings',
		'priority'    => 10,
		'settings'    => 'mst_header_phone',
		'label'       => esc_attr__( 'Phone Number', 'mst' ),
		'description'	=> esc_attr__( 'Change Phone Number of header.', 'mst' ),
		'default'     => '416-817-8787',
	);
	

	return $fields;
}

add_filter( 'kirki/fields', 'mst_fields' );
