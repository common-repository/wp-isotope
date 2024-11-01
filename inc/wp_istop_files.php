<?php 


add_action('wp_enqueue_scripts', 'wp_isotope_fn');

if( !function_exists('wp_isotope_fn')){


        function wp_isotope_fn(){

                /**
                *
                * css files
                *
                */      
                wp_register_style('comet-bootstrap', Plugins_url('../css/bootstrap.min.css', __FILE__), array(), '5.0.1', 'all');
                wp_register_style('comet-style', Plugins_url('../style.css', __FILE__), array(), '5.0.2', 'all');

                

                wp_enqueue_style('comet-bootstrap');
                wp_enqueue_style('comet-style');


                /**
                *
                * js files
                *
                */
                wp_register_script('comet_isotope', Plugins_url('../js/isotope.pkgd.min.js', __FILE__), array('jquery'), '6.0.1', true);

                wp_register_script('comet_main', Plugins_url('../js/main.js', __FILE__), array('jquery'), '6.0.2', true);

                wp_enqueue_script('comet_isotope');
                wp_enqueue_script('comet_main');


        }

}

