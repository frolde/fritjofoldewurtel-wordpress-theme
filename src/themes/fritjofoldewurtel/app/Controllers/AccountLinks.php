<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class AccountLinks extends Controller
{
    /**
     * Returns Account Links
     *
     * @return array
     */
     public function the_account_link( $option_name = '', $echo = true )
    {
      $fritjofoldewurtel_theme_settings = get_option( 'fritjofoldewurtel_theme_settings_option_name' );

      if ($echo === true) {
        echo $fritjofoldewurtel_theme_settings[$option_name];
      } else {
        return $fritjofoldewurtel_theme_settings[$option_name];
      }
    }
}
