<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class App extends Controller
{
    public function cta_top()
    {
    $cta_top = get_posts([
      'post_type'       => 'cta',
      'post_status'     => 'publish',
      'meta_key'        => 'cta_position',
      'meta_value'      => 'top',
      'posts_per_page'  => '1',
      'orderby'         => 'menu_order',
      'order'           => 'ASC'
    ]);
    return array_map(function ($post) {
      return [
        'content' => get_field('cta_content', $post),
        'button_text' => get_field('cta_button_text', $post),
        'button_link' => get_field('cta_button_link', $post)
      ];
    }, $cta_top);
    }

    public function siteName()
    {
        return get_bloginfo('name');
    }

    public static function title()
    {
        if (is_home()) {
            if ($home = get_option('page_for_posts', true)) {
                return get_the_title($home);
            }
            return __('Latest Posts', 'sage');
        }
        if (is_archive()) {
            return get_the_archive_title();
        }
        if (is_search()) {
            return sprintf(__('Search Results for %s', 'sage'), get_search_query());
        }
        if (is_404()) {
            return __('Not Found', 'sage');
        }
        return get_the_title();
    }
}
