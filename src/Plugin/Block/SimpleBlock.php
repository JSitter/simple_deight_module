<?php
namespace Drupal\simple_deight_module\Plugin\Block;

use Drupal\Core\BlockBase;
/**
 * Provides a Simple Sample Block
 * @Block(
 * id = "simple_drupal_block",
 * admin_label = @Translation("Simple Drupal 8 Block Sampledd"),
 * category = @Translation("Drupal 8 example block"),
 * )
 */
class SimpleBlock extends BlockBase {
    /**
     * {@inheritdoc}
     */
    public function build() {
        return[
            '#markup' => $this->yourPrivateFunction(),
            '#attached' => array(
                'library' => array('simple_deight_module/js-example'),
            ),
        ];
    }

    /**
     * Custom private function for markup display
     */
    private function yourPrivateFunction() {
        $quoteString = "<p>In the beginning the universe was created. This has made a lot of people very angry and been widely regarded as a bad move.</p><i>Douglas Adams -- The Hitchhiker's Guide to the Galaxy</i>";
        return $quoteString;
    }
}
