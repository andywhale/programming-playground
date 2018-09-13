<?php

namespace algorithms\sort;

class mergeSort implements sortAlgorithm {

  /**
   * Sort the given array allowing numeric values to bubble to the top.
   */
  public function sort(array $items) {
    return $this->mergeSort($items);
  }

  protected function mergeSort(array $items) {
    $numberOfItems = count($items);
    if ($numberOfItems === 1) {
      return $items;
    }
    $left = $this->mergeSort(array_slice($items, 0, $numberOfItems/2));
    $right = $this->mergeSort(array_slice($items, $numberOfItems/2, $numberOfItems));

    return $this->merge($left, $right);
  }

  protected function merge($leftItems, $rightItems) {
    $items = [];
    $leftIndex = 0;
    $rightIndex = 0;
    while ($leftIndex < count($leftItems) && $rightIndex < count($rightItems)) {
      if ($leftItems[$leftIndex] > $rightItems[$rightIndex]) {
        $items[] = $rightItems[$rightIndex];
        $rightIndex++;
      } else {
        $items[] = $leftItems[$leftIndex];
        $leftIndex++;
      }
    }
    for ($i = $leftIndex; $i < count($leftItems); $i ++) {
      $items[] = $leftItems[$i];
    }
    for ($i = $rightIndex; $i < count($rightItems); $i ++) {
      $items[] = $rightItems[$i];
    }
    return $items;
  }

}
