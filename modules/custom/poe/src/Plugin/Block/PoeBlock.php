<?php

namespace Drupal\poe\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Url;

/**
 * Class PoeBlock
 * @package src\Plugin\Block
 *
 * @Block (
 *     id= "poe_block",
 *     admin_label = @Translation("POE block"),
 * )
 */

class PoeBlock extends BlockBase{

  public function build() {
    $content = 'PARAGRAPHE DANS UN LIEN. Donec rutrum congue leo eget malesuada. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Sed porttitor lectus nibh. Proin eget tortor risus. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Donec sollicitudin molestie malesuada. Donec rutrum congue leo eget malesuada. Curabitur aliquet quam id dui posuere blandit.';

    $build['link_array'] = [
      '#type'     =>  'link',
      '#title'    =>  [
        '#type'   =>  'html_tag',
        '#tag'    =>  'p',
        '#value'  => $this->t($content),
      ],
      '#url'      =>  Url::fromUri('internal:/<none>#'), //internal:/node/1
    ];

    return $build;

  }

}
