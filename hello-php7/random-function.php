<?php
    // random_int가 random 데이터 생성 실패 시, Exception 발생
    // 기존에 10 null bytes로 들어갔는데 보안에 이슈가 생기므로 Exception을 일으키게 변경
    $password = "";
    for ($i = 0; $i < 10; $i++) {
        $password .= chr(random_int(33, 124));
    }
    var_dump($password);
?>
