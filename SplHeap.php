<?php

include_once "common.php";

// 定义一个堆
class MySplHeap extends SplHeap {
    public function compare($array1, $array2)
    {
        $values1 = array_values($array1);
        $values2 = array_values($array2);
        if ($values1[0] === $values2[0]) return 0;
        return $values1[0] < $values2[0] ? -1 : 1;
    }
}

$heap = new MySplHeap();

$heap->insert(array ('AA Gent' => 15));
$heap->insert(array ('Anderlecht' => 20));
$heap->insert(array ('Cercle Brugge' => 11));
$heap->insert(array ('Charleroi' => 12));
$heap->insert(array ('Club Brugge' => 21));
$heap->insert(array ('G. Beerschot' => 15));
$heap->insert(array ('Kortrijk' => 10));
$heap->insert(array ('KV Mechelen' => 18));
$heap->insert(array ('Lokeren' => 10));
$heap->insert(array ('Moeskroen' => 7));
$heap->insert(array ('Racing Genk' => 11));
$heap->insert(array ('Roeselare' => 6));
$heap->insert(array ('Standard' => 20));
$heap->insert(array ('STVV' => 17));
$heap->insert(array ('Westerlo' => 10));
$heap->insert(array ('Zulte Waregem' => 15));

while ($heap->valid()) {
    dump($heap->current());
    // list ($team, $score) = $heap->current();
    // echo $team . ': ' . $score . PHP_EOL;
    $heap->next();
  }
