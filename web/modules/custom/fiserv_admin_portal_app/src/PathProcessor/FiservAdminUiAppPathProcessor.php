<?php
namespace Drupal\fiserv_admin_portal_app\PathProcessor;

use Drupal\Core\PathProcessor\InboundPathProcessorInterface;

use Symfony\Component\HttpFoundation\Request;

class FiservAdminUiAppPathProcessor implements InboundPathProcessorInterface {

  public function processInbound($path, Request $request) {
    if (strpos($path, '/fiserv-admin-ui/') === 0) {
      $names = preg_replace('|^\/fiserv-admin-ui\/|', '', $path);
      $names = str_replace('/',':', $names);
      return "/fiserv-admin-ui/$names";
    }

    return $path;
  }
} 