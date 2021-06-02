<?php
declare(strict_types=1);
use MallardDuck\MallardDuck;
use DecoyDuck\DecoyDuck;
use RedheadDuck\RedheadDuck;
use RubberDuck\RubberDuck;

function autoload(string $className): void
{
  $filename = __DIR__ . '/' . str_replace('\\', '/', $className) . '.php';
  if (is_file($filename)) {
    require_once($filename);
  }
}

spl_autoload_register('autoload');

$mallardDuck = new MallardDuck();
$mallardDuck->display();
$mallardDuck->quack();
$mallardDuck->swim();
$mallardDuck->fly();
echo PHP_EOL;
$redheadDuck = new RedheadDuck();
$redheadDuck->display();
$redheadDuck->quack();
$redheadDuck->swim();
$redheadDuck->fly();
echo PHP_EOL;
$rubberDuck = new RubberDuck();
$rubberDuck->swim();
$rubberDuck->quack();
$rubberDuck->display();
echo PHP_EOL;
$decoyDuck = new DecoyDuck();
$decoyDuck->swim();
$decoyDuck->display();