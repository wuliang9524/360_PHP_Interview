<?php
/*
 * @Author: long wuliang9524@gmail.com
 * @Date: 2024-07-10 10:19:07
 * @LastEditors: long wuliang9524@gmail.com
 * @LastEditTime: 2024-07-11 15:40:00
 * @FilePath: /360_PHP_Interview/chapter8_算法数据结构考察点/6_merge_sort.php
 * @Description: 
 * 
 * Copyright (c) 2024 by ${git_name_email}, All Rights Reserved. 
 */

function mergeSort($arr) {
    $n = count($arr);

    if($n < 2){
        return $arr;
    }

    $middle = floor($n/2);

    $leftArr = array_slice($arr, 0, $middle);
    $rightArr = array_slice($arr, $middle);
}