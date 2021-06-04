<?php

namespace Drupal\drupalup_block\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Drupalup Block' Block.
 *
 * @Block(
 *   id = "drupalup_block",
 *   admin_label = @Translation("Drupalup block"),
 *   category = @Translation("Our example Drupal Up block"),
 * )
 */
class DrupalupBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return [
      '#markup' => $this->getRandQuote(),
      '#cache' => [
        'max-age' => 0
      ],
    ];
  }

  /**
   * Private function for getting random quote.
   */
  private function getRandQuote() {
    $quotes = [
      '<i>Detroit is a place where we have had it pretty tough. But there is a generosity here and a well of kindness that goes deep.</i> Mitch Album',
      '<i>Nowhere on earth has more soul than Detroit.</i> Mayer Hawthorne',
      '<i>Detroit: Cars and rock \'n\' roll. Not a bad combo.</i> Kid Rock',
      '<i>There are cities that get by on their good looks, offer climate and scenery, views of mountains or oceans, rockbound or with palm trees. And there are cities like Detroit that have to work for a living.</i> Elmore Leonard'
    ];
    return $quotes[array_rand($quotes)];
  }

}