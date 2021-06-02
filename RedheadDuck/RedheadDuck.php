<?php
declare(strict_types=1);
namespace RedheadDuck;
use Duck\Duck;

class RedheadDuck extends Duck
{
  public function fly(): void
  {
    echo 'Я умею летать!' . PHP_EOL;
  }

  public function quack(): void
  {
    echo 'Я умею крякать!' . PHP_EOL;
  }

  public function display(): void
  {
    echo 'Привет! Я здесь!' . PHP_EOL;
  }
}