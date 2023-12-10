<?php

namespace Drupal\marucha\Controller;

use Drupal\Component\Datetime\Time;
use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\DependencyInjection\Attribute\Autowire;

/**
 * Provides route responses for marucha module.
 */
class MaruchaController extends ControllerBase {

  /**
   * An time service.
   *
   * @var \Drupal\Component\Datetime\Time
   */
  protected $time;

  /**
   * Constructs.
   *
   * @param \Drupal\Component\Datetime\Time $time
   *   This is an time service.
   */
  public function __construct(
    #[Autowire(service: 'datetime.time')]
    Time $time
  ) {
    $this->time = $time;
  }

  /**
   * Returns a simple page.
   *
   * @return array
   *   A simple renderable array.
   */
  public function index() {
    $now = $this->time->getCurrentTime();
    return ['#markup' => $now];
  }

}
