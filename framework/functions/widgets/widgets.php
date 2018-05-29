<?php 

if(! function_exists('infobiz_widgets')){

	function infobiz_widgets(){
		register_sidebar([
			'name'			=> __('Footer Widgets 1', 'infobiz'),
			'id'			=> 'footer_widgets_1',
			'description'	=> '',
			'class'			=> '',
			'before_widget'=> '<div class="col-md-4 col-sm-6 col-xs-12 footer-logo"><div class="single-widget">',
			'after_widget'	=> '</div></div>',
			'before_title' 	=> '<h5>',
			'after_title'	=> '</h5>'
		]);

	}

	add_action('widgets_init', 'infobiz_widgets');
}

if(! function_exists('infobiz_footer_about')){

	function infobiz_footer_about(){
		register_sidebar([
			'name'			=> __('Footer Widgets 2', 'infobiz'),
			'id'			=> 'footer_widgets_2',
			'description'	=> '',
			'class'			=> '',
			'before_widget'=> '<div class="col-md-2 col-sm-3 col-xs-12 footer-list"><div class="single-widget">',
			'after_widget'	=> '</div></div>',
			'before_title' 	=> '<h5>',
			'after_title'	=> '</h5>'
		]);

	}

	add_action('widgets_init', 'infobiz_footer_about');
}