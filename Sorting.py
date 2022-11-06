def bubble_sort(l1 : list):
    n= len(l1)
    for i in range(n-1):
        for j in range(n-1-i):
            if l1[j] > l1[j+1]:
                l1[j],l1[j+1] = l1[j+1],l1[j]
    return l1
list1= [1,5,7,4,9,3,6]
print(bubble_sort(list1))