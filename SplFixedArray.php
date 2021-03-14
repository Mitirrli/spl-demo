<?php

const FIXED_ARRAY = 'KEY 为 %s, VALUE 为 %s';

$fixedArray = new SplFixedArray(10); //初始化一个固定大小为10的数组

var_dump($fixedArray->count()); //获取数组大小

var_dump($fixedArray->getSize());

var_dump($fixedArray->offsetSet(2, 'dd')); //通过下标设置元素

var_dump($fixedArray->offsetGet(2)); //通过下标获取元素

// $fixedArray[100] = 'test'; //数组下标越界

var_dump(sprintf(FIXED_ARRAY, $fixedArray->key(), $fixedArray->current())); //current 返回 NULL 不存在

$fixedArray->next();

var_dump(sprintf(FIXED_ARRAY, $fixedArray->key(), $fixedArray->current())); 

$fixedArray->next(); //下一个元素

$fixedArray->rewind(); //将迭代器从结束倒回开始

var_dump($fixedArray->key());

var_dump(sprintf(FIXED_ARRAY, $fixedArray->key(), $fixedArray->current()));

var_dump($fixedArray->offsetUnset(2)); //通过下标删除元素

var_dump($fixedArray); //打印对象

var_dump($fixedArray->toArray()); //转换为数组

var_dump($fixedArray->fromArray([5 => 1])); //数组转换为splFixedArray