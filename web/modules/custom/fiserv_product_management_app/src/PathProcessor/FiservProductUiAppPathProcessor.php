<?php
namespace Drupal\fiserv_product_management_app\PathProcessor;

use Drupal\Core\PathProcessor\InboundPathProcessorInterface;

use Symfony\Component\HttpFoundation\Request;

class FiservProductUiAppPathProcessor implements InboundPathProcessorInterface {

  public function processInbound($path, Request $request) {
    if (strpos($path, '/product-management/') === 0) {
      $names = preg_replace('|^\/product-management\/|', '', $path);
      $names = str_replace('/',':', $names);
      return "/product-management/$names";
    }
    return $path;
  }
} 