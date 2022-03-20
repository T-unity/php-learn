<?php

require_once 'item.php';

class pen extends item
{

  public static function getPrice()
  {
    return '1000 yen';
  }

  public function getUnit()
  {
    return '100';
  }

}

echo pen::getPrice();

$unit = new pen();
echo $unit->getUnit();
