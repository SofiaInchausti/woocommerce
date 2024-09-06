<?php 

/**
 * Fany Lab Theme Customizer
 *
 * @package woocommerce Lab
 */

function woocommerce_lab_customizer( $wp_customize ){

	// Copyright Section

	$wp_customize->add_section(
		'sec_copyright', array(
			'title'			=> __( 'Copyright Settings', 'woocommerce-lab' ),
			'description'	=> __( 'Copyright Section', 'woocommerce-lab' )
		)
	);

			// Field 1 - Copyright Text Box
			$wp_customize->add_setting(
				'set_copyright', array(
					'type'					=> 'theme_mod',
					'default'				=> '',
					'sanitize_callback'		=> 'sanitize_text_field'
				)
			);

			$wp_customize->add_control(
				'set_copyright', array(
					'label'			=> __( 'Copyright', 'woocommerce-lab' ),
					'description'	=> __( 'Please, add your copyright information here', 'woocommerce-lab' ),
					'section'		=> 'sec_copyright',
					'type'			=> 'text'
				)
			);

	/*--------------------------------------------------------------------------------*/
	// Slider Section

	$wp_customize->add_section(
		'sec_slider', array(
			'title'			=> __( 'Slider Settings', 'woocommerce-lab' ),
			'description'	=> __( 'Slider Section', 'woocommerce-lab' )
		)
	);	

			// Field 1 - Slider Page Number 1

			$wp_customize->add_setting(
				'set_slider_page1', array(
					'type'					=> 'theme_mod',
					'default'				=> '',
					'sanitize_callback'		=> 'absint'
				)
			);

			$wp_customize->add_control(
				'set_slider_page1', array(
				    'label'			=> __( 'Set slider page 1', 'woocommerce-lab' ),
					'description'	=> __( 'Set slider page 1', 'woocommerce-lab' ),
					'section'		=> 'sec_slider',
					'type'			=> 'dropdown-pages'
				)
			);			

			// Field 2 - Slider Button Text Number 1

			$wp_customize->add_setting(
				'set_slider_button_text1', array(
					'type'					=> 'theme_mod',
					'default'				=> '',
					'sanitize_callback'		=> 'sanitize_text_field'
				)
			);

			$wp_customize->add_control(
				'set_slider_button_text1', array(
					'label'			=> __( 'Button Text for Page 1', 'woocommerce-lab' ),
					'description'	=> __( 'Button Text for Page 1', 'woocommerce-lab' ),
					'section'		=> 'sec_slider',
					'type'			=> 'text'
				)
			);

			// Field 3 - Slider Button URL Number 1

			$wp_customize->add_setting(
				'set_slider_button_url1', array(
					'type'					=> 'theme_mod',
					'default'				=> '',
					'sanitize_callback'		=> 'esc_url_raw'
				)
			);

			$wp_customize->add_control(
				'set_slider_button_url1', array(
					'label'			=> __( 'URL for Page 1', 'woocommerce-lab' ),
					'description'	=> __( 'URL for Page 1', 'woocommerce-lab' ),
					'section'		=> 'sec_slider',
					'type'			=> 'url'
				)
			);	

			/*---------------------------------------*/

			// Field 4 - Slider Page Number 2

			$wp_customize->add_setting(
				'set_slider_page2', array(
					'type'					=> 'theme_mod',
					'default'				=> '',
					'sanitize_callback'		=> 'absint'
				)
			);

			$wp_customize->add_control(
				'set_slider_page2', array(
					'label'			=> __( 'Set slider page 2', 'woocommerce-lab' ),
					'description'	=> __( 'Set slider page 2', 'woocommerce-lab' ),
					'section'		=> 'sec_slider',
					'type'			=> 'dropdown-pages'
				)
			);			

			// Field 5 - Slider Button Text Number 2

			$wp_customize->add_setting(
				'set_slider_button_text2', array(
					'type'					=> 'theme_mod',
					'default'				=> '',
					'sanitize_callback'		=> 'sanitize_text_field'
				)
			);

			$wp_customize->add_control(
				'set_slider_button_text2', array(
					'label'			=> __( 'Button Text for Page 2', 'woocommerce-lab' ),
					'description'	=> __( 'Button Text for Page 2', 'woocommerce-lab' ),
					'section'		=> 'sec_slider',
					'type'			=> 'text'
				)
			);

			// Field 6 - Slider Button URL Number 2

			$wp_customize->add_setting(
				'set_slider_button_url2', array(
					'type'					=> 'theme_mod',
					'default'				=> '',
					'sanitize_callback'		=> 'esc_url_raw'
				)
			);

			$wp_customize->add_control(
				'set_slider_button_url2', array(
					'label'			=> __( 'URL for Page 2', 'woocommerce-lab' ),
					'description'	=> __( 'URL for Page 2', 'woocommerce-lab' ),
					'section'		=> 'sec_slider',
					'type'			=> 'url'
				)
			);			

			/*---------------------------------------*/

			// Field 7 - Slider Page Number 3

			$wp_customize->add_setting(
				'set_slider_page3', array(
					'type'					=> 'theme_mod',
					'default'				=> '',
					'sanitize_callback'		=> 'absint'
				)
			);

			$wp_customize->add_control(
				'set_slider_page3', array(
					'label'			=> __( 'Set slider page 3', 'woocommerce-lab' ),
					'description'	=> __( 'Set slider page 3', 'woocommerce-lab' ),
					'section'		=> 'sec_slider',
					'type'			=> 'dropdown-pages'
				)
			);			

			// Field 8 - Slider Button Text Number 3

			$wp_customize->add_setting(
				'set_slider_button_text3', array(
					'type'					=> 'theme_mod',
					'default'				=> '',
					'sanitize_callback'		=> 'sanitize_text_field'
				)
			);

			$wp_customize->add_control(
				'set_slider_button_text3', array(
					'label'			=> __( 'Button Text for Page 3', 'woocommerce-lab' ),
					'description'	=> __( 'Button Text for Page 3', 'woocommerce-lab' ),
					'section'		=> 'sec_slider',
					'type'			=> 'text'
				)
			);

			// Field 9 - Slider Button URL Number 3

			$wp_customize->add_setting(
				'set_slider_button_url3', array(
					'type'					=> 'theme_mod',
					'default'				=> '',
					'sanitize_callback'		=> 'esc_url_raw'
				)
			);

			$wp_customize->add_control(
				'set_slider_button_url3', array(
					'label'			=> __( 'URL for Page 3', 'woocommerce-lab' ),
					'description'	=> __( 'URL for Page 3', 'woocommerce-lab' ),
					'section'		=> 'sec_slider',
					'type'			=> 'url'
				)
			);

	/*--------------------------------------------------------------------------------*/
	// Home Page Settings

	$wp_customize->add_section(
		'sec_home_page', array(
			'title'			=> __( 'Home Page Products and Blog Settings', 'woocommerce-lab' ),
			'description'	=> __( 'Home Page Section', 'woocommerce-lab' )
		)
	);	

			// Field 1 - Popular Products Title
			$wp_customize->add_setting(
				'set_popular_title', array(
					'type' 				=> 'theme_mod',
					'default' 			=> '',
					'sanitize_callback' => 'sanitize_text_field'
				)
			);

			$wp_customize->add_control(
				'set_popular_title', array(
					'label' 		=> __( 'Popular Products Title', 'woocommerce-lab' ),
					'description' 	=> __( 'Popular Products Title', 'woocommerce-lab' ),
					'section' 		=> 'sec_home_page',
					'type' 			=> 'text'
				)
			);

			// Field 2 - Popular Products Limit
			$wp_customize->add_setting(
				'set_popular_max_num', array(
					'type'					=> 'theme_mod',
					'default'				=> '',
					'sanitize_callback'		=> 'absint'
				)
			);

			$wp_customize->add_control(
				'set_popular_max_num', array(
					'label'			=> __( 'Popular Products Max Number', 'woocommerce-lab' ),
					'description'	=> __( 'Popular Products Max Number', 'woocommerce-lab' ),
					'section'		=> 'sec_home_page',
					'type'			=> 'number'
				)
			);

			// Field 3 - Popular Products Columns
			$wp_customize->add_setting(
				'set_popular_max_col', array(
					'type'					=> 'theme_mod',
					'default'				=> '',
					'sanitize_callback'		=> 'absint'
				)
			);

			$wp_customize->add_control(
				'set_popular_max_col', array(
					'label'			=> __( 'Popular Products Max Columns', 'woocommerce-lab' ),
					'description'	=> __( 'Popular Products Max Columns', 'woocommerce-lab' ),
					'section'		=> 'sec_home_page',
					'type'			=> 'number'
				)
			);


			/*---------------------------------------------------------------------------------------*/
			// Field 4 - New Arrivals Title
			$wp_customize->add_setting(
				'set_new_arrivals_title', array(
					'type' 				=> 'theme_mod',
					'default' 			=> '',
					'sanitize_callback' => 'sanitize_text_field'
				)
			);

			$wp_customize->add_control(
				'set_new_arrivals_title', array(
					'label' 		=> __( 'New Arrivals Title', 'woocommerce-lab' ),
					'description' 	=> __( 'New Arrivals Title', 'woocommerce-lab' ),
					'section' 		=> 'sec_home_page',
					'type' 			=> 'text'
				)
			);

			// Field 5 - New Arrivals Limit
			$wp_customize->add_setting(
				'set_new_arrivals_max_num', array(
					'type'					=> 'theme_mod',
					'default'				=> '',
					'sanitize_callback'		=> 'absint'
				)
			);

			$wp_customize->add_control(
				'set_new_arrivals_max_num', array(
					'label'			=> __( 'New Arrivals Max Number', 'woocommerce-lab' ),
					'description'	=> __( 'New Arrivals Max Number', 'woocommerce-lab' ),
					'section'		=> 'sec_home_page',
					'type'			=> 'number'
				)
			);

			// Field 6 - New Arrivals Columns
			$wp_customize->add_setting(
				'set_new_arrivals_max_col', array(
					'type'					=> 'theme_mod',
					'default'				=> '',
					'sanitize_callback'		=> 'absint'
				)
			);

			$wp_customize->add_control(
				'set_new_arrivals_max_col', array(
					'label'			=> __( 'New Arrivals Max Columns', 'woocommerce-lab' ),
					'description'	=> __( 'New Arrivals Max Columns', 'woocommerce-lab' ),
					'section'		=> 'sec_home_page',
					'type'			=> 'number'
				)
			);


			/*---------------------------------------------------------------------------------------*/
			// Field 7 - Deal of the Week Title
			$wp_customize->add_setting(
				'set_deal_title', array(
					'type' 				=> 'theme_mod',
					'default' 			=> '',
					'sanitize_callback' => 'sanitize_text_field'
				)
			);

			$wp_customize->add_control(
				'set_deal_title', array(
					'label' 		=> __( 'Deal of the Week Title', 'woocommerce-lab' ),
					'description' 	=> __( 'Deal of the Week Title', 'woocommerce-lab' ),
					'section' 		=> 'sec_home_page',
					'type' 			=> 'text'
				)
			);

			// Field 8 - Deal of the Week Checkbox
			$wp_customize->add_setting(
				'set_deal_show', array(
					'type'					=> 'theme_mod',
					'default'				=> '',
					'sanitize_callback'		=> 'woocommerce_lab_sanitize_checkbox'
				)
			);

			$wp_customize->add_control(
				'set_deal_show', array(
					'label'			=> __( 'Show Deal of the Week?', 'woocommerce-lab' ),
					'section'		=> 'sec_home_page',
					'type'			=> 'checkbox'
				)
			);

			// Field 9 - Deal of the Week Product ID
			$wp_customize->add_setting(
				'set_deal', array(
					'type'					=> 'theme_mod',
					'default'				=> '',
					'sanitize_callback'		=> 'absint'
				)
			);

			$wp_customize->add_control(
				'set_deal', array(
					'label'			=> __( 'Deal of the Week Product ID', 'woocommerce-lab' ),
					'description'	=> __( 'Product ID to Display', 'woocommerce-lab' ),
					'section'		=> 'sec_home_page',
					'type'			=> 'number'
				)
			);


			/*---------------------------------------------------------------------------------------*/
			// Field 10 - Blog Title
			$wp_customize->add_setting(
				'set_blog_title', array(
					'type' 				=> 'theme_mod',
					'default' 			=> '',
					'sanitize_callback' => 'sanitize_text_field'
				)
			);

			$wp_customize->add_control(
				'set_blog_title', array(
					'label' 		=> __( 'Blog Section Title', 'woocommerce-lab' ),
					'description' 	=> __( 'Blog Section Title', 'woocommerce-lab' ),
					'section' 		=> 'sec_home_page',
					'type' 			=> 'text'
				)
			);			

}
add_action( 'customize_register', 'woocommerce_lab_customizer' );

function woocommerce_lab_sanitize_checkbox( $checked ){
	return ( ( isset ( $checked ) && true == $checked ) ? true : false );
}