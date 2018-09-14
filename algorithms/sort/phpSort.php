<?php

namespace algorithms\sort;

class phpSort implements sortAlgorithm {

  /**
   * Sort the given array using native php sort().
   */
  public function sort(array $items) {
    sort($items);
    return $items;
  }

}
