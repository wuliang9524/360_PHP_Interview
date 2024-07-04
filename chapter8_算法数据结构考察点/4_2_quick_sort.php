<?php

/**
 * 原地快速排序
 * 主函数
 * 
 * 实现原理：
 * 与非原地快速排序实现原理基本一致，分治法。
 * 
 * 
 * 
 *
 * @param [type] $arr   
 * @param [type] $low   起始索引
 * @param [type] $high  结束索引
 * @return void
 * @author LONG <1121116451@qq.com>
 * @version version
 * @date 2024-07-04
 */
function quickSort(&$arr, $low, $high)
{
    if ($low < $high) {
        $piovtIndex = partition($arr, $low, $high);

        quickSort($arr, $low, $piovtIndex - 1);
        quickSort($arr, $piovtIndex + 1, $high);
    }
}

/**
 * 分区函数
 */
function partition(&$arr, $low, $high)
{
    $piovt = $arr[$high];  // 最右边的元素作为基准值
    $i     = $low - 1;     // 这个索引 i 用于追踪小于基准值的元素的位置，初始化

    // 遍历数组，将小于基准值的元素放在的左边，用 $i 标记索引位置
    for ($j = $low; $j < $high; $j++) {
        if ($arr[$j] < $piovt) {
            $i++;
            swap($arr, $i, $j);
        }
    }

    // 将基准值放在正确的位置上
    swap($arr, $i + 1, $high);

    return $i + 1;
}

/**
 * 交换数组中的两个元素
 */
function swap(&$arr, $a, $b)
{
    $tmp     = $arr[$a];
    $arr[$a] = $arr[$b];
    $arr[$b] = $tmp;
}

$arr = [3, 12, 3445, 565, 7676, 86];
quickSort($arr, 0, count($arr) - 1);
var_export($arr);
