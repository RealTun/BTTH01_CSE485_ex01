<?php
    function sum($carry, $item){
        $carry += $item;
        return $carry;
    }

    function subtract($temp, $item){
        $temp -= $item;
        return $temp;
    }

    function multiplication($temp, $item){
        $temp *= $item;
        return $temp;
    }

    function division($temp, $item){
        $temp /= $item;
        return $temp;
    }


    $arr = [2, 5, 6, 9, 2, 5, 6, 12, 5];
    echo '<pre>';
    echo print_r($arr);
    echo '</pre>';

    echo 'Sum of array: ' . array_reduce($arr, 'sum') . '<br>';
    echo 'Subtract of array: ' . array_reduce($arr, 'subtract') . '<br>';
    echo 'Multiplication of array: ' . array_reduce($arr, 'multiplication') . '<br>';
    echo 'Division of array: ' . array_reduce($arr, 'division') . '<br>';
    