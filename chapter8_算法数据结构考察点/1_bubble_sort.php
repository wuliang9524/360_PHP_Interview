<?php

/**
 * 冒泡排序
 * 
 * 实现过程动画
 * https://www.cs.usfca.edu/~galles/visualization/ComparisonSort.html
 * 
 * 原理： 反复比较相邻的元素，如果顺序错误就交换，直到没有需要交换的元素为止。
 * 
 * 为什么叫冒泡排序：
 * 是因为在排序过程中，数组中的最大或最小元素通过相邻元素的比较和交换逐渐“冒泡”到数组的一端，就像水中的气泡一样逐步上升。
 * 
 * 外层循环的意义：冒泡的趟数，每趟结束后，将每趟的最大/最小值交换到数组末尾
 * 内层循环的意义：每趟相邻元素比较，顺序错误就交换
 *
 * @param [type] $arr
 * @return void
 * @author LONG <1121116451@qq.com>
 * @version version
 * @date 2024-07-03
 */
function bubbleSort($arr)
{
    $n = count($arr);

    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($arr[$j] > $arr[$j + 1]) {
                $tmp         = $arr[$j];
                $arr[$j]     = $arr[$j + 1];
                $arr[$j + 1] = $tmp;
            }
        }
    }

    return $arr;
}

$arr = [12, 3445, 565, 7676, 86];
var_export(bubbleSort($arr));
