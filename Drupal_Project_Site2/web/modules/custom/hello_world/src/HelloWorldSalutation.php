<?php

namespace Drupal\hello_world;

use Drupal\Core\StringTranslation\StringTranslationTrait;

/**
 * Prepare the salutation to the world.
 */

 class HelloWorldSalutation{

    use StringTranslationTrait;

    /**
     * Returns the salutation
     */

     public function getSalutation() {

        $time = new \DateTime();
        if ((int) $time->format('G') >= 00 && (int) $time->format('G') < 12){
            return $this->t('Good morning world');
        }
        if ((int) $time->format('G') >= 12 && (int) $time->format('G') < 18){
            return $this->t('Good afternoon world');
        }
        if ((int) $time->format('G') >= 18){
            return $this->t('Good evening world');
        }
     }

 }