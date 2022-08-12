<?php
namespace Drupal\fiserv_product_bundle_app\PathProcessor;

use Drupal\Core\PathProcessor\InboundPathProcessorInterface;

use Symfony\Component\HttpFoundation\Request;

class FiservProductBundleUiAppPathProcessor implements InboundPathProcessorInterface {

  public function processInbound($path, Request $request) {
    if (strpos($path, '/fiserv-bundles/') === 0) {
      $names = preg_replace('|^\/fiserv-bundles\/|', '', $path);
      $names = str_replace('/',':', $names);
      return "/fiserv-bundles/$names";
    }

    return $path;
  }
} 