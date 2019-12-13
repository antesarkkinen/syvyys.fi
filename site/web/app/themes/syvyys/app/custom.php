<?php

namespace App;

/**
 * Add custom options page
 */
if (function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
        'page_title' => __('Global Settings'),
        'menu_title' => __('Global Settings'),
        'menu_slug' => 'global-settings',
        'post_id' => 'global_settings'
    ));
}

/**
 * Add extra separator
 */
add_action( 'admin_menu', function () {
    $position = 26;
    global $menu;
    $separator = [
        0 => '',
        1 => 'read',
        2 => 'separator' . $position,
        3 => '',
        4 => 'wp-menu-separator'
    ];
    if (isset($menu[$position])) {
        $menu = array_splice($menu, $position, 0, $separator);
    } else {
        $menu[$position] = $separator;
    }
});

/**
 * Add custom <body> classes
 */
add_filter('body_class', function (array $custom_classes) {
    $custom_classes = ['bg-gray-200', 'text-gray-900', 'antialiased'];
    return $custom_classes;
});
