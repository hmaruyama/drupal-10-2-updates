<?php

namespace Drupal\marucha\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides marucha block.
 *
 * @Block(
 *   id = "marucha_block",
 *   admin_label = @Translation("Marucha Block"),
 * )
 */
class MaruchaBlock extends BlockBase {

  /**
   * {@inheritDoc}
   */
  public function build() {
    return [
      '#markup' => 'This is marucha block.',
    ];
  }

}
