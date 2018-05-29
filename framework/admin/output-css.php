<?php 

if(! function_exists('infobiz_theme_option_css')){
    add_action('wp_enqueue_scripts', 'infobiz_theme_option_css');
    function infobiz_theme_option_css(){
        wp_enqueue_style(
            'theme_option_css',
            IB_PATH_CSS .'/theme_option.css'
        );

        $css_data = "";
        $menu_color = cs_get_option('menu_color');

        if(!empty($menu_color)){

            $css_data .= "
                
                #mega-menu-wrapper .nav>li>a {
                    color: $menu_color;
                }

            ";
        }


        $menu_hover_color = cs_get_option('menu_hover_color');

        if(!empty($menu_hover_color)){

            $css_data .= "
                #mega-menu-wrapper .nav>li:hover>a {
                    color: $menu_hover_color;           
                }

                #mega-menu-wrapper .nav>li.active>a {
                    color: $menu_hover_color;
                }
            ";
        }

        $dropdown_color = cs_get_option('dropdown_bg_color');
        if(!empty($dropdown_color)){
            $css_data .= "
            
            #mega-menu-wrapper .nav>li.dropdown-holder .sub-menu{
                background: $dropdown_color;
            }
            
            ";
        }

        $dropdown_text = cs_get_option('dropdown_text_color');
        if(!empty($dropdown_text)){
            $css_data .= "

            #mega-menu-wrapper .nav>li.dropdown-holder .sub-menu li a {
                color: $dropdown_text;
            }

            ";
        }

        $dropdown_border = cs_get_option('dropdown_border_color');
        if(!empty($dropdown_border)){
            $css_data .= "

            #mega-menu-wrapper .nav>li.dropdown-holder .sub-menu li a {
                border-color: $dropdown_text;
            }

            ";
        }
        
            

        wp_add_inline_style('theme_option_css', $css_data);
    }
    
}