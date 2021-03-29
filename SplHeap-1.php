<?php

include_once "common.php";

class MySplHeap extends SplHeap{
    public function compare($values1, $values2) {
        if($values1 == $values2) {
            return 0;
        }
        return $values1 < $values2 ? -1 : 1;
    }
}

$heap = new MySplHeap;

$heap->insert(1);
$heap->insert(4);
$heap->insert(2);
$heap->insert(3);
$heap->insert(2);

while ($heap->valid()) {
    dump($heap->current());

    $heap->next();
}