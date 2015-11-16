<?php
// 기존 preg_replace_callback 메서드의 callback 파라미터가 하나만 지원해서 가독성이 떨어짐
// 다수의 callback을 사용하기 위해 preg_replace_callback_array 메서드 추가
$subject = 'ABC DEF GH IJK';
echo preg_replace_callback_array(
    array(
        "/ABC/m" => function ($matches) {
            return "a_b_c";
        },
        "/DEF/m" => function ($matches) {
            return "D E F";
        },
        "/GH/m" => function ($matches) {
            return "g h";
        }
    ), $subject);

?>
