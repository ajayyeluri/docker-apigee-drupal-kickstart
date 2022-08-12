<?php

namespace Drupal\fiserv_product_bundle_app\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Class ProductBundleUiAppController.
 *
 * @package Drupal\fiserv_product_bundle_app\Controller
 */
class ProductBundleUiAppController extends ControllerBase {

  
  public function loadProductBundleUiApp() {
    $build = [
        '#markup' => '<div id="fiserv-product-bundle-app-id"></div>',
        '#attached' => [
          'library' => [
            'fiserv_product_bundle_app/fiserv_product_bundle_app.product-bundle-ui-bundle'
          ],
        ],
       ];
  
     drupal_flush_all_caches();
    return $build;
  }

  


}