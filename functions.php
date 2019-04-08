<?php

    /*------------------------------------------------------------------------*/
    /*  New Site Options
    /*------------------------------------------------------------------------*/

class fukasawa_child_Customize {

	function fukasawa_register( $wp_customize ) {

	$wp_customize->add_section( 'fukasawa_social_settings',
            array(
                'priority'       => 50,
                'capability'     => 'edit_theme_options',
                'title'          => esc_html__( 'Redes Sociais', 'fukasawa' ),
                'description'    => '',
            )
        );

        // Facebook custom Link
        $wp_customize->add_setting( 'fukasawa_fb_link',
            array(
                'sanitize_callback' => 'esc_url',
                'default'           => esc_url( home_url( '/' )).esc_html__('', 'fukasawa'),
                'transport'         => 'refresh',
            )
        );
        $wp_customize->add_control( 'fukasawa_fb_link',
            array(
                'type'  =>'text',
                'label'       => esc_html__('URL do Facebook', 'fukasawa'),
                'section'     => 'fukasawa_social_settings',
                'description' => '',
            )
        );

        // Instagram custom Link
        $wp_customize->add_setting( 'fukasawa_insta_link',
            array(
                'sanitize_callback' => 'esc_url',
                'default'           => esc_url( home_url( '/' )).esc_html__('', 'fukasawa'),
                'transport'         => 'refresh',
            )
        );
        $wp_customize->add_control( 'fukasawa_insta_link',
            array(
                'type'  =>'text',
                'label'       => esc_html__('URL do Instagram', 'fukasawa'),
                'section'     => 'fukasawa_social_settings',
                'description' => '',
            )
        );

        // Twitter custom Link
        $wp_customize->add_setting( 'fukasawa_twitter_link',
            array(
                'sanitize_callback' => 'esc_url',
                'default'           => esc_url( home_url( '/' )).esc_html__('', 'fukasawa'),
                'transport'         => 'refresh',
            )
        );
        $wp_customize->add_control( 'fukasawa_twitter_link',
            array(
                'type'  =>'text',
                'label'       => esc_html__('URL do Twitter', 'fukasawa'),
                'section'     => 'fukasawa_social_settings',
                'description' => '',
            )
        );

        // YouTube custom Link
        $wp_customize->add_setting( 'fukasawa_yt_link',
            array(
                'sanitize_callback' => 'esc_url',
                'default'           => esc_url( home_url( '/' )).esc_html__('', 'fukasawa'),
                'transport'         => 'refresh',
            )
        );
        $wp_customize->add_control( 'fukasawa_yt_link',
            array(
                'type'  =>'text',
                'label'       => esc_html__('URL do YouTube', 'fukasawa'),
                'section'     => 'fukasawa_social_settings',
                'description' => '',
            )
        ); 


        // Linkedin custom Link
        $wp_customize->add_setting( 'fukasawa_linkedin_link',
            array(
                'sanitize_callback' => 'esc_url',
                'default'           => esc_url( home_url( '/' )).esc_html__('', 'fukasawa'),
                'transport'         => 'refresh',
            )
        );
        $wp_customize->add_control( 'fukasawa_linkedin_link',
            array(
                'type'  =>'URL',
                'label'       => esc_html__('URL do Linkedin', 'fukasawa'),
                'section'     => 'fukasawa_social_settings',
                'description' => '',
            )
        );
	}
}

// Setup the Theme Customizer
add_action( 'customize_register' , array( 'fukasawa_child_Customize' , 'fukasawa_register' ) );

// Add Theme Support for responsive Videos
add_theme_support( 'jetpack-responsive-videos' );

// Post formats
add_post_type_support( 'jetpack-portfolio', 'post-formats', array(
     'image', 'video', 'gallery'
) );

?>