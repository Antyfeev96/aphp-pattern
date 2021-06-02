<?php
declare(strict_types=1);
namespace DecoyDuck;
use Duck\Duck;

class DecoyDuck extends Duck
{
  public function display(): void
  {
    echo 'Привет! Я здесь!' . PHP_EOL;
  }
}