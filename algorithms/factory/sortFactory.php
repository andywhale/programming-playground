<?php

namespace algorithms\factory;

class sortFactory implements algorithmFactory {

  public static function create(string $type) {
    $algorithmClass = "\\algorithms\\sort\\{$type}Sort";
    return new $algorithmClass();
  }

}
