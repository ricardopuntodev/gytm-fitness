<?php 
    // Menus de navegaciòn, agregar mas utilizando el arreglo
    function gymfitness_menus() {
        register_nav_menus( array(
            'menu-principal' => __('Menu Principal','gymfitness')                
        ));
    }
    //Mediante el hook de wordpress mandamos nuestro menu
    add_action('init','gymfitness_menus');


    // Scripts y Styles
    function gymfitness_scripts_styles(){

        // 1 Normalize para que todos los elementos se vean iguales en  todos los exploradores
        wp_enqueue_style('style', get_template_directory_uri().'/css/normalize.css', array(), '8.0.1');

        // 2 Agregamos google fonts
        wp_enqueue_style('googleFont', 'https://fonts.googleapis.com/css?family=Open+Sans|Raleway:400,700,900|Staatliches&display=swap', array(), '1.0.0');

        // 2 Hoja de estilos principal
        wp_enqueue_style('style', get_stylesheet_uri(), array('normalize','googleFont'),  '1.0.0');
    }
    
    // Comunicando nuestra hoja de estilo con el hook de wordpress
    add_action('wp_enqueue_scripts','gymfitness_scripts_styles');