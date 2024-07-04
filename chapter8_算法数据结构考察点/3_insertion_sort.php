<?php

/**
 * 插入排序
 * 
 * 实现原理：
 * 将一个数组分为已排序区间和未排序区间，初始时已排序区间只包含数组的第一个元素，然后依次将未排序区间中的元素插入到已排序区间的合适位置，直到整个数组排序完成为止。
 *
 * 为什么叫插入排序：
 * 是因为其核心思想是将一个未排序的元素逐个“插入”到已经排好序的部分中
 * 
 * @param [type] $arr
 * @return void
 * @author LONG <1121116451@qq.com>
 * @version version
 * @date 2024-07-04
 */
function insertionSort($arr)
{
    $n = count($arr);

    for ($i = 1; $i < $n; $i++) {

        $key = $arr[$i];  // 将被插入的值
        $j   = $i - 1;    // 已排序部分的最后一个元素的索引

        while ($j >= 0 && $arr[$j] > $key) {
            $arr[$j + 1] = $arr[$j];
            $j--;
        }

        $arr[$j + 1] = $key;
    }

    return $arr;
}

$arr = [3, 12, 3445, 565, 7676, 86];
var_export(insertionSort($arr));
