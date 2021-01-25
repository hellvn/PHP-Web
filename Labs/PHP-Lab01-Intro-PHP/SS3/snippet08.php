<?php
include 'snippet07.php';
use aptech\{Botston, NewYork};
use function aptech\{foo1, foo2};
    $d = new Botston();
    $d->say();
    $n = new NewYork();
    $n->say();
    foo1();
    foo2();
