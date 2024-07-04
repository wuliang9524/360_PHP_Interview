<?php

/**
 * 选择排序
 * 
 * 实现原理：每次从未排序的部分中选出最小（或最大）的元素，然后将其放到已排序部分的末尾。
 * 
 * 为什么叫选择排序：
 * 是因为在排序的过程中，它每次会从未排序部分选择出最小（或最大）的元素，然后将其放置在已排序部分的末尾，或者直接交换到合适的位置。
 * 这个选择的过程就是它名字的由来。
 *
 * @param [type] $arr
 * @return void
 * @author LONG <1121116451@qq.com>
 * @version version
 * @date 2024-07-03
 */
function selectionSort($arr)
{
    $n = count($arr);

    for ($i = 0; $i < $n - 1; $i++) {
        $minIndex = $i;

        for ($j = $i + 1; $j < $n; $j++) {
            if ($arr[$j] < $arr[$minIndex]) {
                $minIndex = $j;
            }
        }

        if ($minIndex != $i) {
            $tmp            = $arr[$i];
            $arr[$i]        = $arr[$minIndex];
            $arr[$minIndex] = $tmp;
        }
    }

    return $arr;
}

$arr = [12, 3445, 565, 7676, 86];
var_export(selectionSort($arr));
