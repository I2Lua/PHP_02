<?php 

class A {
    public function foo() {
        static $x = 0;
        echo ++$x;
    }
}
class B extends A {
}
/*
class B {
	public function foo() {
		static $x = 0;
		echo ++$x;
	}
}
*/

// $a1 и $b1 берут разные ссылки на объекты!
$a1 = new A; // ссылка на класс A
$b1 = new B; // сслыка на класс B
$a1->foo(); 
$b1->foo(); 
$a1->foo(); 
$b1->foo(); 