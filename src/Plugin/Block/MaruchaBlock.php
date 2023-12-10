<?php

namespace Drupal\marucha\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Block\Attribute\Block;
use Drupal\Core\StringTranslation\TranslatableMarkup;

/**
 * Provides marucha block.
 */
#[Block(
  id: 'marucha_block',
  admin_label: new TranslatableMarkup('Marucha Block')
)]
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
