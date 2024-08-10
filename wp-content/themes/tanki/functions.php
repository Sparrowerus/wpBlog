<?php
function theme_setup(){
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'tanki'),
        'secondary' => __('Secondary Menu', 'tanki'),
        'mobile' => __('Mobile Menu', 'tanki'),
        'footer' => __('Footer Menu', 'tanki'),
    ));
    add_theme_support('post-thumbnails');
}

function wpConnect_scripts(){
    wp_enqueue_style('style-css', get_stylesheet_uri());
    wp_enqueue_script('main-js', get_template_directory_uri() . '/js/main.js');
}

function my_custom_post_type() {
    register_post_type('my_post',
        array(
            'labels' => array(
                'name' => __('Посты'),
                'singular_name' => __('Пост')
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'posts'),
            'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'page-attributes'),
            'hierarchical' => true,
        )
    );

    register_taxonomy(
        'category',
        'my_post',
        array(
            'labels' => array(
                'name' => _x('Рубрики', 'taxonomy general name'),
                'singular_name' => _x('Рубрика', 'taxonomy singular name'),
                'search_items' => __('Искать Рубрики'),
                'all_items' => __('Все Рубрики'),
                'parent_item' => __('Родительская Рубрика'),
                'parent_item_colon' => __('Родительская Рубрика:'),
                'edit_item' => __('Редактировать Рубрику'),
                'update_item' => __('Обновить Рубрику'),
                'add_new_item' => __('Добавить новую Рубрику'),
                'new_item_name' => __('Название новой Рубрики'),
                'menu_name' => __('Рубрики'),
            ),
            'hierarchical' => true,
            'rewrite' => array('slug' => 'rubrics'),
            'show_admin_column' => true,
        )
    );
}

function include_custom_post_types_in_search($query) {
    if ($query->is_search && !is_admin()) {
        $query->set('post_type', array('post', 'page', 'my_post')); // Замените 'custom_post' на ваш кастомный тип записи
    }
    return $query;
}

class My_Walker_Nav_Menu extends Walker_Nav_Menu {
    function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
        $classes = empty($item->classes) ? array() : (array) $item->classes;
        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item));
        $class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';

        $active_class = in_array('current-menu-item', $classes) ? ' aria-current="page"' : '';

        $output .= '<a' . $class_names . ' href="' . esc_attr($item->url) . '"' . $active_class . '>';
        $output .= '<div class="background"></div>';
        $output .= apply_filters('the_title', $item->title, $item->ID);
        $output .= '</a>';
    }

    function end_el(&$output, $item, $depth = 0, $args = array()) {
        $output .= "\n";
    }
}

class My_Secondary_Walker_Nav_Menu extends Walker_Nav_Menu {
    function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
        $classes = empty($item->classes) ? array() : (array) $item->classes;
        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item));
        $class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';

        $active_class = in_array('current-menu-item', $classes) ? ' aria-current="page"' : '';

        $output .= '<a' . $class_names . ' href="' . esc_attr($item->url) . '"' . $active_class . '>';
        $output .= apply_filters('the_title', $item->title, $item->ID);
        $output .= '</a>';
    }

    function end_el(&$output, $item, $depth = 0, $args = array()) {
        $output .= "\n";
    }
}

add_action('init', 'my_custom_post_type');
add_action('wp_enqueue_scripts', 'wpConnect_scripts');
add_action('after_setup_theme', 'theme_setup');
add_filter('pre_get_posts', 'include_custom_post_types_in_search');
?>