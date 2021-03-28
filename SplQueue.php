<?php

//使用双向链表提供队列的功能

$queue = new SplQueue();
$queue->enqueue('A');
$queue->enqueue('B');
$queue->enqueue('C');

$queue->rewind();
while($queue->valid()){
    echo $queue->current(),"\n";
    $queue->next();
}

print_r($queue);
$queue->dequeue(); //remove first one
print_r($queue);
print_r($queue->offsetGet(0));