<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class Clients extends Controller
{
    /**
     * Displays Clients
     *
     * @return array
     */
     public function clientsLoop()
    {

      $display_clients = get_posts([
        'post_type' => 'partners',
        'posts_per_page'=>'6',
      ]);

      return array_map(function ($post) {
          return [
              'thumbnail' => wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'large' ),
          ];
      }, $display_clients);
    }
}
