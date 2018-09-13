<?php

namespace utility\numbers;

class randomNumbers {

  public static function getRandomIntegerArray(int $numberOfItems) {
    $items = range(0, $numberOfItems);
    shuffle($items);
    return $items;
  }

}
