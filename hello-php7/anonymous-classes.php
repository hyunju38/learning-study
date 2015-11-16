<?php

$identicalAnonClasses = [];

for ($i = 0; $i < 2; $i++) {
    $identicalAnonClasses[$i] = new class(99) {
        public $i;
        public function __construct($i) {
            $this->i = $i;
        }
    };
}

var_dump($identicalAnonClasses[0] == $identicalAnonClasses[1]);

$identicalAnonClasses[2] = new class(99) {
    public $i;
    public function __construct($i) {
        $this->i = $i;
    }
};

var_dump($identicalAnonClasses[0] == $identicalAnonClasses[2]);

// // var_dump(get_class(new class{}));
// class mine {}
// var_dump(get_class(new class extends mine {}));

trait Foo {
    public function someMethod() {
        return "bar";
    }
}

$anonClass = new class {
    use Foo;
};

var_dump($anonClass->someMethod());

// class Foo {}
//
// $child = new class extends Foo {};
//
// var_dump($child instanceof Foo);
