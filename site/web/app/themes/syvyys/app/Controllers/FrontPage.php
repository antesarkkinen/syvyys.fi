<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class FrontPage extends Controller
{

  public static function showField() {
  	$field = get_field('test_field');
  	return $field;
  }

}
