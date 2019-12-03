<?php

namespace Controllers;
abstract class Controller
{
  /**
   * @param string $view
   * @param array $params
   */
  protected function render(string $view, array $params = []):void
  {
    ob_start();
    foreach ($params as $key => $value) {
      ${$key} = $value;
    }
    require $view;
    $content = ob_get_clean();
    require 'public/index.php';
  }
}
