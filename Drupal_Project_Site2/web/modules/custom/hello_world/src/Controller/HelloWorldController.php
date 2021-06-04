<?php

namespace Drupal\hello_world\Controller;

use Drupal\Core\Controller\ControllerBase;

use Drupal\hello_world\HelloWorldSalutation;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Controller for the salution message
 */

class HelloWorldController extends ControllerBase{

    /**
     * @var \Drupal\hello_world\HelloWorldSalutation
     */
    protected $salutation;

    /**
     * HelloWorldController constructor
     * 
     * @param \Drupal\hello_world\HelloWorldSalution $salutation
     */

    public function __construct(HelloWorldSalutation $salutation) {
        $this->salutation = $salutation;
    }

     /**
      * {@inheritdoc}
      */
    public static function create(ContainerInterface $container){
        return new static($container->get('hello_world.salutation'));
    }



    /**
     * Hello World
     * 
     * @return array
     *  Our message
     */

    public function helloWorld() {
        return [
            //'#markup' => $this->t('Hello World. I\'m here.'),
            '#markup' => $this->salutation->getSalutation(),
        ];
    }
}