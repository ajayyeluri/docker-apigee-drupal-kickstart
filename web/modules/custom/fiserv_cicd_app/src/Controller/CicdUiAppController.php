<?php

namespace Drupal\fiserv_cicd_app\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Class CatalogPage.
 *
 * @package Drupal\fiserv_cicd_app\Controller
 */
class CicdUiAppController extends ControllerBase {

  
  public function loadCicdUiApp() {
    $build = [
        '#markup' => '<div id="fiserv-proxy-gen-app-id"></div>',
        '#attached' => [
          'library' => [
            'fiserv_cicd_app/fiserv_cicd_app.cicd-ui-bundle'
          ],
        ],
       ];
  
    
    return $build;
  }

  


}