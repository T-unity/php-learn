<?php

abstract class item {
  private $price;

  abstract public static function getPrice();

  abstract public function getUnit();

}
