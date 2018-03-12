<?php
/**
 * @file
 * Contains \Drupal\bike\Plugin\Block\BikeBlock.
 */

namespace Drupal\bike\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Bike' Block
 *
 * @Block(
 *   id = "bike_block",
 *   admin_label = @Translation("Bike block"),
 * )
 */
class BikeBlock extends BlockBase {
    /**
     * {@inheritdoc}
     */
    public function build() {
        return array(
            '#markup' => $this->t('Honda'),
        );
    }

}