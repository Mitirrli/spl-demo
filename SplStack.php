<?php

const STACK = 'KEY 为 %s, VALUE 为 %s';

$stack = new SplStack();

var_dump($stack->count());

var_dump($stack->isEmpty());

$stack->add(0, 111); //双向链表指定位置添加数据

$stack->add(1, 222);

$stack->push(333); //推入数据

var_dump($stack);

var_dump($stack->bottom()); //最底部数据

var_dump($stack->top()); //最顶部数据

var_dump($stack->count()); //计算双向链表的数目

var_dump($stack->pop()); //推出最后一条数据

var_dump($stack);   

$stack->rewind();
while($stack->valid()) {
    var_dump(sprintf(STACK, $stack->key(), $stack->current())); //从顶部出来
    $stack->next();
}