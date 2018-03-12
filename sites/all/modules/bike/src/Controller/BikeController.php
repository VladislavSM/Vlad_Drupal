<?php
/**
@file
Contains \Drupal\bike\Controller\BikeController.
 */

namespace Drupal\bike\Controller;

use Drupal\Core\Controller\ControllerBase;

class BikeController extends ControllerBase {

    public function content() {
        return array(
            '#type' => 'markup',
            '#markup' => t('Этот раздел описывает  мотоциклы по категориям :'),
        );
    }
}