<?php

namespace algorithms\sort;

class refinedMergeSort extends mergeSort implements sortAlgorithm {

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
    $mid = $numberOfItems/2;
    $left = $this->mergeSort(array_slice($items, 0, $mid));
    $right = $this->mergeSort(array_slice($items, $mid, $numberOfItems));

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
    while ($leftIndex < count($leftItems)) {
      $items[] = $leftItems[$leftIndex];
      $leftIndex++;
    }
    while ($rightIndex < count($rightItems)) {
      $items[] = $rightItems[$rightIndex];
      $rightIndex++;
    }
    return $items;
  }

}
