<?php

require_once('utility/autoloader/autoloader.php');

$numberOfItems = 1000;

$sortAlgorithms = ['bubble'];

foreach ([100,1000,2000,3000] as $numberOfItems) { 
  $items = \utility\numbers\randomNumbers::getRandomIntegerArray($numberOfItems);
  echo "<ul>";
  foreach ($sortAlgorithms as $sort) {
    $start = microtime(true);
    $sortedItems = \algorithms\factory\sortFactory::create($sort)->sort($items);
    $end = round(microtime(true) - $start, 2);
    echo "<li>Sorted {$numberOfItems} items in {$end} using a {$sort} sort</li>";
  }
  echo "</ul>";
}


