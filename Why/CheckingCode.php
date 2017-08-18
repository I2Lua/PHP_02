<?php

class A {
    public function foo() {
        static $x = 0; // будет проинициализирована только при первом вызове функции!
        echo ++$x;
    }
}
// одини и теже объекты(классы).
$a1 = new A(); 
$a2 = new A();

$a1->foo();
$a2->foo();
$a1->foo();
$a2->foo();