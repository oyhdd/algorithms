"""
1. 二分查找是有条件的，首先是有序，其次因为二分查找操作的是下标，所以要求是顺序表
2. 最优时间复杂度：O(1)
3. 最坏时间复杂度：O(logn)
"""
def binarySearch(list, item) :
    min = 0
    max = len(list) - 1

    while min <= max :
        mid = (min + max) // 2
        if list[mid] == item :
            return mid
        if list[mid] > item :
            max = mid - 1
        else :
            min = mid + 1
    return None


my_list = [1,3,5,7,8,9,10,20]

print(binarySearch(my_list, 8))
