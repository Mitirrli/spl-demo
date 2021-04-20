<?php

class Test
{

}

$t1 = new Test;
$t2 = new Test;
$t3 = new Test;

$obj = new SplObjectStorage;

$obj->attach($t1);
$obj->attach($t2);

var_dump($obj->contains($t1));
var_dump($obj->contains($t2));
var_dump($obj->contains($t3));

$obj->detach($t1);

var_dump($obj->contains($t1));
var_dump($obj->contains($t2));
var_dump($obj->contains($t3));