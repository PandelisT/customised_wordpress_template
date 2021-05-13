<?php

function ju_customize_register( $wp_customize ){
    ju_misc_customizer_section( $wp_customize );

    $wp_customize->add_setting('ju_facebook_handle', [
        'default' => ''
    ]);

    $wp_customize->add_section('ju_social_section', [
        'title' => __('Udemy Social Settings', 'udemy'),
        'priority' => 30
        
        ]);

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ju_social_facebook_input',
            array(
                'label'          => __( 'Facebook Handle', 'udemy' ),
                'section'        => 'ju_social_section',
                'settings'       => 'ju_facebook_handle',
                'type'           => 'text',
                )
            )
        );

        $wp_customize->add_setting('ju_twitter_handle', [
            'default' => ''
        ]);
    
        $wp_customize->add_section('ju_social_section', [
            'title' => __('Udemy Social Settings', 'udemy'),
            'priority' => 30
            
            ]);
    
        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
                'ju_social_twitter_input',
                array(
                    'label'          => __( 'Twitter Handle', 'udemy' ),
                    'section'        => 'ju_social_section',
                    'settings'       => 'ju_twitter_handle',
                    'type'           => 'text',
                    )
                )
            );
    // $wp_customize->get_section( 'title_tagline' )->title    =   'General';

    // $wp_customize->add_panel( 'udemy', [
    //     'title'         =>  __( 'Udemy', 'udemy' ),
    //     'description'   =>  '<p>Udemy Theme Settings</p>',
    //     'priority'      =>  160
    // ]);

    // ju_social_customizer_section( $wp_customize );
    
}