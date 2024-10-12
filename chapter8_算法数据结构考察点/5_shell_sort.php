<?php

/**
 * 希尔排序
 * 
 * 实现原理：
 * 通过比较和交换不相邻的元素，逐步减少间隔，使得数据项在局部逐渐有序，最后进行一次普通的插入排序。
 * 
 * 1.选择初始间隔：
 *  将数组长度的一半作为初始间隔 gap
 * 2.分组排序
 *  按间隔 gap 将数组分成若干组。
 *  对每组进行插入排序。
 * 3.缩小间隔
 *  每次将间隔 gap 缩小一半，继续对分组进行排序，直到 gap 为 0。
 * 
 * 希尔排序以其发明者的姓氏命名，成为了计算机科学中重要的排序算法之一
 *
 * @param [type] $arr
 * @return void
 * @author LONG <1121116451@qq.com>
 * @version version
 * @date 2024-07-09
 */
function shellSort($arr)
{
    $n = count($arr);

    $gap = floor($n / 2);

    while ($gap > 0) {
        for ($i = $gap; $i < $n; $i++) {
            $tmp = $arr[$i];
            $j   = $i;

            while ($j >= $gap && $arr[$j - $gap] > $tmp) {
                $arr[$j]  = $arr[$j - $gap];
                $j       -= $gap;
            }
            $arr[$j] = $tmp;
        }
        $gap = floor($gap / 2);
    }
    return $arr;
}

$arr = [19, 2, 31, 45, 6, 11, 121, 27, 8, 33];
var_export(shellSort($arr));
