<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class FrontPage extends Controller
{

  public function hero_items()
  {
    $hero_items = [
    	'title' => get_field('hero_h1', 'global_settings'),
    ];
    return $hero_items;
  }

  public function yogi_items()
  {
    $yogi_items = get_posts([
      'post_type' => 'yogi',
      'post_status' => 'publish',
      'posts_per_page'=>'-1'
    ]);

    return array_map(function ($post) {
      return [
        'post_type' => get_post_type($post),
      	'slug' => apply_filters('post_slug', $post->post_name),
        'title' => apply_filters('the_title', $post->post_title),
        'content' => substr(strip_tags(apply_filters('the_content', $post->post_content)), 0, 120).'...',
        'excerpt' => get_the_excerpt($post),
        'permalink' => get_permalink($post),
        'thumbnail_url' => get_the_post_thumbnail_url($post),
        'related_yogas' => get_field('related_yogas', $post)
      ];
    }, $yogi_items);
  }

}
