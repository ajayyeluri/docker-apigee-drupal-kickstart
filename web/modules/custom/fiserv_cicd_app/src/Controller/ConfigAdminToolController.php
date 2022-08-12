<?php

namespace Drupal\fiserv_cicd_app\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Class CatalogPage.
 *
 * @package Drupal\fiserv_cicd_app\Controller
 */
class ConfigAdminToolController extends ControllerBase {

  
  public function loadConfigAdminToolUiApp() {
    $build = [
        '#markup' => '<div id="fiserv-config-admin-app-id"></div>',
        '#attached' => [
          'library' => [
            'fiserv_cicd_app/fiserv_cicd_app.config-admin-tool-bundle'
          ],
        ],
       ];
  
    
    return $build;
  }

  


}