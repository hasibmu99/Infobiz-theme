<?php 
/**
 * Cs Framework Settings
 */
if(! function_exists('infobiz_theme_settings')){
    function infobiz_theme_settings($settings){
        $settings           = [
        'menu_title'      => 'InoBiz Framework',
        'menu_type'       => 'menu', // menu, submenu, options, theme, etc.
        'menu_slug'       => 'cs-framework',
        'ajax_save'       => false,
        'show_reset_all'  => false,
        'framework_title' => 'INFOBIZ Framework <small>by shuvo</small>',
        ];

        return $settings;
    }
    add_filter('cs_framework_settings', 'infobiz_theme_settings');
}

/**
 * Cs Framework Options
 */

 if(! function_exists('infobiz_theme_options')){
     function infobiz_theme_options($options){
         $options = [];

         $options[] = [
             'name'     => 'header_topbar_section',
             'title'    => __( 'Top Bar' , 'infobiz' ), 
             'icon'     => 'fa fa-heart',
             'fields'   => [
                [
                    'id'       => 'disable_topbar',
                    'type'     => 'switcher',
                    'title'    => __('Top Bar Option', 'infobiz'),
                    'default'  => true,
                    'label'     => __('Disable Topbar', 'infobiz')
                ],
                [
                     'id'           => 'welcome_text',
                     'type'         => 'text',
                     'title'        => __('Welcome Text', 'infobiz'),
                     'default'      => __('Providing awesome since 2001 years', 'infobiz'),
                     'desc'         => __('Write Top Bar Welcome Text', 'infobiz'),
                     'dependency'   => ['disable_topbar', '==' , 'true']
                ],

                [
                     'id'       => 'phone_number',
                     'type'     => 'text',
                     'title'    => __('Phone Number', 'infobiz'),
                     'default'  => '+88 01682648101',
                     'desc'     => __('Write Top Bar Phone Number', 'infobiz'),
                     'dependency'   => ['disable_topbar', '==' , 'true']
                ],

                [
                    'id'                => 'topbar_social_icons',
                    'type'              => 'group',
                    'title'             => __('Social Icons', 'infobiz'),
                    'button_title'      => 'Add Social Icons',
                    'accordion_title'   => 'Add New Field',
                    'dependency'   => ['disable_topbar', '==' , 'true'],
                    'fields'            => [
                        [
                            'id'        => 'social_icons',
                            'type'      => 'icon',
                            'title'     => __('Select Icon','infobiz')
                        ],
                        [
                            'id'        => 'social_links',
                            'type'      => 'text',
                            'title'     => __('Social Link','infobiz')
                        ]
                    ]
                ]
            ]
        ];

        $options[] = [
            'name'      => 'header_navbar_section',
            'title'     => __('Navbar Settings', 'infobiz'),
            'icon'      => 'fa fa-bars',
            'fields'    => [
                [
                    'id'        => 'menu_color',
                    'type'      => 'color_picker',
                    'title'     => __('Menu Color', 'infobiz'),
                    'desc'      => __('Select Color For Menu','infobiz'),
                    'default'   => '#151515'
                ],
                [
                    'id'        => 'menu_hover_color',
                    'type'      => 'color_picker',
                    'title'     => __('Menu Hover Color', 'infobiz'),
                    'desc'      => __('Select Hover Color For Menu','infobiz'),
                    'default'   => '#11caff'
                ],
                [
                    'id'        => 'dropdown_bg_color',
                    'type'      => 'color_picker',
                    'title'     => __('Dropdown Background', 'infobiz'),
                    'desc'      => __('Select color for background in dropdown', 'infobiz'),
                    'default'   => '#11caff'
                ],
                [
                    'id'        => 'dropdown_border_color',
                    'type'      => 'color_picker',
                    'title'     => __('Dropdown Border Color', 'infobiz'),
                    'desc'      => __('Select color for dropdown border', 'infobiz'),
                    'default'   => '#11caff'
                ],
                [
                    'id'        => 'dropdown_text_color',
                    'type'      => 'color_picker',
                    'title'     => __('Dropdown Text Color', 'infobiz'),
                    'desc'      => __('Select color for dropdown text', 'infobiz'),
                    'default'   => '#11caff'
                ],
                [
                    'id'            => 'disable_navbar_button',
                    'type'          => 'switcher',
                    'title'         => __('Navbar Button', 'infobiz'),
                    'label'         => __('Disable Navbar Button','infobiz'),
                    'default'       => true
                ],
                [
                    'id'            => 'navbar_button_text',
                    'type'          => 'text',
                    'title'         => __('Navbar Button Text', 'infobiz'),
                    'default'       => __('Get Quote','infobiz'),
                    'dependency'    => ['disable_navbar_button', '==', 'true']
                ],
                [
                    'id'            => 'navbar_button_link',
                    'type'          => 'text',
                    'title'         => __('Navbar Button Link', 'infobiz'),
                    'default'       => '#',
                    'dependency'    => ['disable_navbar_button', '==', 'true']
                ],
                [
                    'id'            => 'navbar_button_color',
                    'type'          => 'color_picker',
                    'title'         => __('Navbar Button Color', 'infobiz'),
                    'desc'          => __('Select your Color For navbar','infobiz'),
                    'default'       => '#11caff',
                    'dependency'    => ['disable_navbar_button', '==', 'true']
                ],
                [
                    'id'            => 'navbar_button_hover_color',
                    'type'          => 'color_picker',
                    'title'         => __('Navbar Button Hover Color', 'infobiz'),
                    'desc'          => __('Select your hover background Color For navbar','infobiz'),
                    'default'       => '#11caff',
                    'dependency'    => ['disable_navbar_button', '==', 'true']
                ],
                [
                    'id'            => 'navbar_button_bg_color',
                    'type'          => 'color_picker',
                    'title'         => __('Navbar Button Background Color', 'infobiz'),
                    'desc'          => __('Select your background Color For navbar','infobiz'),
                    'default'       => '#11caff',
                    'dependency'    => ['disable_navbar_button', '==', 'true']
                ]
            ]
            
        ];

        $options[] = [
            'name'      => 'all_logos_section',
            'title'     => __('All Logos', 'infobiz'),
            'icon'      => 'fa fa-leaf',
            'fields'    => [
                [
                    'id'            => 'enable_text_logo',
                    'type'          => 'switcher',
                    'title'         => __('Logo Button', 'infobiz'),
                    'label'         => __('Enable Text Logo','infobiz'),
                    'default'       => false
                ],
                
                [
                    'id'            => 'logo_image',
                    'type'          => 'image',
                    'title'         => __('Image Logo', 'infobiz'),
                    'desc'          => esc_html__('Upload a image for Logo Image(Example size: 158 * 30)', 'infobiz'),
                    'dependency'    => ['enable_text_logo', '==', 'false'],
                ],
                
                [
                    'id'            => 'logo_text',
                    'type'          => 'text',
                    'title'         => __('Logo Text', 'infobiz'),
                    'default'       => 'INFOBIZ',
                    'desc'          =>__('Write some text for Logo', 'infobiz'),
                    'dependency'    => ['enable_text_logo', '==', 'true'],
                ]
                
            ]
        ];

        $options[] = [
            'name'  => 'service_section',
            'title' => __('Services', 'infobiz'),
            'icon'  => 'fa fa-trophy',
            'fields'    => [
                [
                    'id'    => 'disable_button',
                    'title' => __('Button', 'infobiz'),
                    'type'  => 'switcher',
                    'default'   => true,
                    'label' => __('Switcher Button','infobiz')
                ],
                [
                    'id'    => 'services',
                    'title' => __('Our Services', 'infobiz'),
                    'button_title'  => __('Add new', 'infobiz'),
                    'accordion_title'   => __('Service', 'infobiz'),
                    'type'  => 'group',
                    'dependency'    => ['disable_button', '==', 'true'],
                    'fields'    => [
                        [
                            'id'    => 'service_title',
                            'title' => __('Service Title', 'infobiz'),
                            'type'  => 'text'
                        ],
                        [
                            'id'    => 'service_link',
                            'title' => __('Service Link', 'infobiz'),
                            'type'  => 'text',
                            'deafult'   => '#'
                        ],
                        [
                            'id'    => 'service_number',
                            'title' => __('Service Big Number', 'infobiz'),
                            'type'  => 'text'
                        ],
                        [
                            'id'    => 'content_text',
                            'title' => __('Service Description', 'infobiz'),
                            'type'  => 'text'
                        ]

                    ]

                ]
            ]
        ];  

        return $options;
     }
     add_filter('cs_framework_options', 'infobiz_theme_options');
 }