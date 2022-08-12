<?php

namespace Drupal\fiserv_product_management_app\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Class ProductManagementPage.
 *
 * @package Drupal\fiserv_product_management_app\Controller
 */
class ProductManagementUiAppController extends ControllerBase {

  public function loadProductManagementUiApp() {
    $build = [
        '#markup' => '<div id="fiserv-admin-ui-product-app-id"></div>',
        '#attached' => [
          'library' => [
            'fiserv_product_management_app/fiserv_product_management_app.product-management-ui-bundle'
          ],
        ],
       ];
       
    return $build;
  }

  


}