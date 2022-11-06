def binary_search(beg, end, li, find):
    if beg > end:
        return -1
    mid = (beg + end) // 2
    if li[mid] == find:
        return mid
    elif li[mid] < find:
        beg = mid + 1
    elif li[mid] > find:
        end = mid - 1
    return binary_search(beg, end, li, find)

li = [10, 20, 30, 40, 50, 60]
find = int(input("Enter the number"))
val = binary_search(0, len(li) - 1, li, find)
if val == -1:
    print("Not found")
else:
    print("Item found at location:", (val + 1))
