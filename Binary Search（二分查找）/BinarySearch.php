<?php
/*
1. 二分查找条件:有序数组
2. 最优时间复杂度：O(1)
3. 最坏时间复杂度：O(logn)
 */

/**
 * @name   非递归二分查找法
 * @param  array        $array       目标数组
 * @param  int          $item        目标值
 * @return int                       目标值所在下标
 */
function binarySearch($array, $item)
{
    $min = 0;
    $max = count($array);

    while ($min <= $max) {
        $mid = floor(($min + $max) / 2);
        if ($array[$mid] == $item) {
            return $mid;
        } elseif ($array[$mid] >= $item) {
            $max = $mid - 1;
        } else {
            $min = $mid + 1;
        }
    }

    return -1;
}

$array = [1,3,5,7,8,9,10,20];
echo binarySearch($array, 10);
