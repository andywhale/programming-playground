<?php

namespace algorithms\sort;

class bubbleSort implements sortAlgorithm {

  /**
   * Sort the given array allowing numeric values to bubble to the top.
   */
  public function sort(array $items) {
    $sorted = false;
    // We need to get through a complete loop of the items
    // without finding any unsorted items.
    while (!$sorted) {
      $sorted = true;
      foreach ($items as $itemNumber => $item) {
        if ($itemNumber > 0) {
          if ($this->isGreaterThan($items[$itemNumber - 1], $items[$itemNumber])) {
            $items[$itemNumber] = $items[$itemNumber - 1];
            $items[$itemNumber - 1] = $item;
            $sorted = false;
          }
        }
      }
    }
    return $items;
  }

  /**
   * Check if value a is greater than value b.
   */
  private function isGreaterThan($a, $b) {
    return ($a > $b);
  }

}
