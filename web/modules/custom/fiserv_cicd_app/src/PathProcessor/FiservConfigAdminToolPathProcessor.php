<?php
namespace Drupal\fiserv_cicd_app\PathProcessor;

use Drupal\Core\PathProcessor\InboundPathProcessorInterface;

use Symfony\Component\HttpFoundation\Request;

class FiservConfigAdminToolPathProcessor implements InboundPathProcessorInterface {

  public function processInbound($path, Request $request) {
    if (strpos($path, '/fiserv-config-admin-tool/') === 0) {
      $names = preg_replace('|^\/fiserv-config-admin-tool\/|', '', $path);
      $names = str_replace('/',':', $names);
      return "/fiserv-config-admin-tool/$names";
    }
    return $path;
  }
} 