<?php 

    function iniciar_template() {
        add_theme_support('post-thumbnails');
        add_theme_support('title-tag');
    }

    add_action('after_setup_theme', 'iniciar_template');

    /**
     * Register CSS styles to the theme
     */
    function css_assets () {
        wp_register_style(
            'inter-chivo-mono-font',
            'https://fonts.googleapis.com/css2?family=Chivo+Mono:ital,wght@0,100..900;1,100..900&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap',
            '',
            '1.0',
            'all'
        );

        wp_register_style(
            'font-awesome',
            'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css',
            '',
            '6.7.2',
            'all'
        );

        wp_register_style(
            'main',
            get_template_directory_uri() . '/assets/css/main.css',
            '',
            '1.0',
            'all'
        );

        wp_register_style(
            'projects',
            get_template_directory_uri() . '/assets/css/projects.css',
            '',
            '1.0',
            'all'
        );

        wp_register_style(
            'about-me',
            get_template_directory_uri() . '/assets/css/about.css',
            '',
            '1.0',
            'all'
        );

        wp_register_style(
            'contact',
            get_template_directory_uri() . '/assets/css/contact.css',
            '',
            '1.0',
            'all'
        );

        wp_enqueue_style(
            'sidebar-css', 
            get_template_directory_uri() . '/assets/css/sidebar.css', 
            '', 
            '1.0', 
            'all' 
        );

        wp_enqueue_style(
            'single-css', 
            get_template_directory_uri() . '/assets/css/single.css', 
            '', 
            '1.0', 
            'all' 
        );

        wp_enqueue_style(
            'allStyles',
            get_stylesheet_uri(),
            array(
                'inter-chivo-mono-font', 
                'font-awesome',
                'main',
                'projects',
                'about-me',
                'contact',
                'sidebar-css',
                'single-css'
            ),
            '1.0',
            'all'
        );
    }

    add_action('wp_enqueue_scripts', 'css_assets');

    /**
     * Register Js Scripts to Theme
     */
    function js_assets () {
        wp_enqueue_script(
            'main-script',
            get_template_directory_uri() . '/assets/js/main.js',
            '',
            '1.0',
            false
        );
    }

    add_action('wp_enqueue_scripts', 'js_assets');


    /* Register Custom Post Type Proyectos */
    function proyectos_post_type () {
        $labels = array(
            'name' => 'Proyectos',
            'singular_name' => 'Proyecto',
            'menu_name' => 'Proyectos'
        );

        $args = array(
            'label' => 'Proyectos',
            'description' => 'Proyectos realizados',
            'labels'  => $labels,
            'supports'  => array('title', 'editor', 'thumbnail', 'revisions'),
            'public'  => true,
            'show_in_menu'  => true,
            'menu_position'  => 7,
            'menu_icon'  => 'dashicons-media-code',
            'can_export' => true,
            'publicly_queryable' => true,
            'rewrite' => true,
            'show_in_rest' => true,
            'taxonomies' => array('category')
        );

        register_post_type('proyecto', $args);
    }

    add_action('init', 'proyectos_post_type');

    /* Registrar un Menú */
    register_nav_menus(
        array(
            'top_menu' => 'Menú Principal'
        )
    );

    /* Widgets */
    function sidebar () {
        register_sidebar(
            array(
                'name' => 'Main Title',
                'id' => 'title-main',
                'description' => 'Título de la Web',
                'before_title' => '<p>',
                'after_title' => '</p>',
                'before_widget' => '<h1 id="%1$s" class="%2$s">',
                'after_widget' => '</h1>'
            )
        );

        register_sidebar(
            array(
                'name' => 'Main Description',
                'id' => 'title-description',
                'description' => 'Descripción de la Web',
                'before_title' => '<p>',
                'after_title' => '</p>',
                'before_widget' => '<div id="%1$s" class="%2$s">',
                'after_widget' => '</div>'
            )
        );

        register_sidebar(
            array(
                'name' => 'Título de Primera Sección',
                'id' => 'title-project',
                'description' => 'Título de la primera sección',
                'before_title' => '<p>',
                'after_title' => '</p>',
                'before_widget' => '<h2 id="%1$s" class="%2$s">',
                'after_widget' => '</h2>'
            )
        );

        register_sidebar(
            array(
                'name' => 'Título de Segunda Sección',
                'id' => 'about-title',
                'description' => 'Título de la segunda sección',
                'before_title' => '<p>',
                'after_title' => '</p>',
                'before_widget' => '<h2 id="%1$s" class="%2$s">',
                'after_widget' => '</h2>'
            )
        );

        register_sidebar(
            array(
                'name' => 'Contenido de la Segunda Sección',
                'id' => 'about-description',
                'description' => 'Descripción de la segunda sección',
                'before_title' => '<p>',
                'after_title' => '</p>',
                'before_widget' => '<div id="%1$s" class="%2$s">',
                'after_widget' => '</div>'
            )
        );

        register_sidebar(
            array(
                'name' => 'Footers Author',
                'id' => 'footer-author',
                'description' => 'Autor de la página web',
                'before_title' => '<p>',
                'after_title' => '</p>',
                'before_widget' => '<div id="%1$s" class="%2$s">',
                'after_widget' => '</div>'
            )
        );

        register_sidebar(
            array(
                'name' => 'Contact Email',
                'id' => 'contact-email',
                'description' => 'Contact Email',
                'before_title' => '<p>',
                'after_title' => '</p>',
                'before_widget' => '<div id="%1$s" class="%2$s">',
                'after_widget' => '</div>'
            )
        );

    }

    add_action('widgets_init', 'sidebar');

    /* Handle Contact Form Action */
    function handle_contact_form () {

        if (isset($_POST['action']) && $_POST['action'] == 'custom_contact_form') {

            $name = sanitize_text_field($_POST['name']);
            $email = sanitize_email($_POST['email']);
            $companyName = sanitize_text_field($_POST['company-name']);
            $brandName = sanitize_text_field($_POST['brand-name']);
            $message = sanitize_textarea_field($_POST['content']);

            $to = 'gian.vallejos92@gmail.com';

            $subject = 'Contact Form from GVallejos.com';
            $headers = array('Content-Type: text/html; charset=UTF-8');
            
            $message_body = "Name: " . $name . "<br>\n";
            $message_body .= "Email: " . $email . "<br>\n";
            $message_body .= "Company: " . $companyName . "<br>\n";
            $message_body .= "Brand: " . $brandName . "<br>\n";
            $message_body .= "Message: " . $message . "<br>\n";

            if (wp_mail($to, $subject, $message_body, $headers) ){
                wp_redirect(home_url('/thank-you'));
            } else {
                wp_redirect(home_url('/error'));
            }
            exit;
        }
    }

    add_action('admin_post_nopriv_custom_contact_form', 'handle_contact_form');
    add_action('admin_post_custom_contact_form', 'handle_contact_form');

?>
