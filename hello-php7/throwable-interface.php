<?php
    function add(int $left, int $right) {
        return $left + $right;
    }

    try {
        echo add('left', 'right');
    } catch (Exception $e) {
        echo 'Handle exception';
    } catch (TypeError $e) {    // Clearly a different type of object
        echo 'Log type error and end gracefully';
    } catch (Error $e) {
        echo 'Log error and end gracefully';
    }
?>
