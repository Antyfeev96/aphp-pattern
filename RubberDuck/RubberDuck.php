<?php
declare(strict_types=1);
namespace RubberDuck;
use Duck\Duck;

class RubberDuck extends Duck
{
  public function quack(): void
  {
    echo 'Я умею крякать!' . PHP_EOL;
  }

  public function display(): void
  {
    echo 'Привет! Я здесь!' . PHP_EOL;
  }
}