<?php

/**
 * 非原地快速排序
 * 
 * 实现原理：
 * 基于分治法的排序算法。与原地快速排序不同，非原地快速排序在分区过程中使用额外的存储空间来存放子数组。
 * 
 * 1.选择基准值：
 *  通常选择数组中的首个/末尾/中间元素作为基准值，虽然其他选择方法也可以使用。
 * 2.分区过程：
 *  遍历原数组（不包括基准值），将每个元素与基准值比较：
 *      如果元素小于基准值，将其放入 left 数组。
 *      如果元素大于等于基准值，将其放入 right 数组。
 * 3.递归排序：
 *  对 left 和 right 数组分别递归地调用非原地快速排序函数，继续对它们进行基准值选择和分区过程，直到子数组的长度为1或0。
 * 4.合并结果：
 *  递归排序完成后，将排序好的 left 数组、基准值和排序好的 right 数组合并起来，形成最终的有序数组。
 *
 * @param [type] $arr
 * @return void
 * @author LONG <1121116451@qq.com>
 * @version version
 * @date 2024-07-04
 */
function quickSort($arr)
{
    $n = count($arr);

    if ($n <= 1) {
        return $arr;
    }

    $poivtIndex = 0;
    $poivt      = $arr[$poivtIndex];

    $left  = [];
    $right = [];

    for ($i = 0; $i < $n; $i++) {
        if ($i == $poivtIndex) {
            continue;
        }
        if ($arr[$i] < $poivt) {
            $left[] = $arr[$i];
        } else {
            $right[] = $arr[$i];
        }
    }

    return array_merge(quickSort($left), [$poivt], quickSort($right));
}

$arr = [3, 12, 3445, 565, 7676, 86];
var_export(quickSort($arr));
