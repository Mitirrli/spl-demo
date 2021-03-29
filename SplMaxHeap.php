<?php

include_once "common.php";

$heap = new SplMaxHeap;

$heap->insert(3);
$heap->insert(4);
$heap->insert(1);
$heap->insert(7);

// while($heap->valid()) {
//     dump($heap->current());
//     $heap->next();
// }

foreach ($heap as $num) {
    dump($num);
}