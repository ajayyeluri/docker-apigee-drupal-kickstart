<?php

namespace Drupal\fiserv_admin_portal_app\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Class CatalogPage.
 *
 * @package Drupal\fiserv_admin_portal_app\Controller
 */
class AdminUiAppController extends ControllerBase {

  
  public function loadAdminUiApp() {
    $build = [
        '#markup' => '<div id="fiserv-admin-portal-react-app-id"></div>',
        '#attached' => [
          'library' => [
            'fiserv_admin_portal_app/fiserv_admin_portal_app.admin-ui-bundle'
          ],
        ],
       ];
  
     drupal_flush_all_caches();
    return $build;
  }

  


}