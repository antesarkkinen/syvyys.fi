<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class FrontPage extends Controller
{
  public function cta_block()
  {
    $cta_block = get_posts([
      'post_type'       => 'cta',
      'post_status'     => 'publish',
      'meta_key'        => 'cta_position',
      'meta_value'      => 'block',
      'posts_per_page'  => '1',
      'orderby'         => 'menu_order',
      'order'           => 'ASC'
    ]);
    return array_map(function ($post) {
      return [
        'header' => get_field('cta_header', $post),
        'content' => get_field('cta_content', $post),
        'button_text' => get_field('cta_button_text', $post),
        'button_link' => get_field('cta_button_link', $post)
      ];
    }, $cta_block);
  }

  public function hero_items()
  {
    $hero_items = [
    	'title' => get_field('hero_h1', 'global_settings'),
    	'intro' => get_field('hero_intro', 'global_settings'),
    	'bg_image' => get_field('hero_bg_image', 'global_settings'),
    	'hero_cta_text' => get_field('hero_cta_text', 'global_settings'),
    	'hero_cta_url' => get_field('hero_cta_url', 'global_settings')
    ];
    return $hero_items;
  }

  public function yogi_items()
  {
    $yogi_items = get_posts([
      'post_type' => 'yogi',
      'post_status' => 'publish',
      'posts_per_page'=> '-1'
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
