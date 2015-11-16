<?php
    // 예약어와 사용자 정의어가 서로 충돌
    // 반 예악어 지원을 위해 context sensitive lexer를 도입
    // 예약어와 겹치는 이름이 가독성이 더 높아질 경우를 고려
    // // `::class`은 class 이름을 나타내므로 `const class = 'Foo';`는 불가능.
    // class Foo {
    //     // const class = 'Foo';
    //     public $list = 'list';
    // }
    //
    // echo (new Foo)->list;
    //
    // class Collection {
    //     public function forEach(callable $callback) {
    //         echo 'forEach!';
    //     }
    //     public function list() {
    //         echo 'list';
    //     }
    //     public static function new(array $itens) {
    //         return new self($itens);
    //     }
    // }
    //
    // Collection::new(['foo', 'bar'])->forEach(function($index, $item) {
    //     echo 'hello';
    // })->list();

    class View {
        public function include(View $view) {
            // ...
            echo 'include!';
        }
    }
    $viewA = new View('a.view');
    $viewA->include(new View('b.view'));

    class HTTP {
        const CONTINUE = 100;
    }
    echo HTTP::CONTINUE;
?>
