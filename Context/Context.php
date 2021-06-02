<?php
declare(strict_types=1);
namespace Context;
class Context
{
  private $strategy;
  public function __construct(Strategy $strategy)
  {
    $this->strategy = $strategy;
  }

  public function setStrategy(Strategy $strategy)
  {
    $this->strategy = $strategy;
  }

  public function showWhatDuckCan(): void
  {
   $this->strategy->doDuckStuff();
  }
}