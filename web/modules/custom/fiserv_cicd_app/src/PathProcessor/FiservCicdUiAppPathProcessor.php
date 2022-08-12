<?php
namespace Drupal\fiserv_cicd_app\PathProcessor;

use Drupal\Core\PathProcessor\InboundPathProcessorInterface;

use Symfony\Component\HttpFoundation\Request;

class FiservCicdUiAppPathProcessor implements InboundPathProcessorInterface {

  public function processInbound($path, Request $request) {
    if (strpos($path, '/fiserv-cicd/') === 0) {
      $names = preg_replace('|^\/fiserv-cicd\/|', '', $path);
      $names = str_replace('/',':', $names);
      return "/fiserv-cicd/$names";
    }
    return $path;
  }
} 