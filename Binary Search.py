l1 = [1,23,51,61,70,89,95,100,105,118,125,136,144,158,168,173,189,192]
print (l1)
find_elem = int(input("Enter the number"))
beg = 0
end = len(l1)-1
mid = None
found = False
count = 0
while beg <= end:
    count = count + 1
    mid = (beg + end) // 2
    print("beg=",beg)
    print("end=",end)
    print("mid=",mid)
    mid_elem = l1[mid]
    print("element at mid:",mid_elem)
    if l1[mid] == find_elem:
        found = True
        break
    elif l1[mid] < find_elem:
        beg = mid + 1
    elif l1[mid] > find_elem:
        end = mid - 1
if found:
    print("Number found at location:",mid+1)
else:
    print("Number not in list")

print(count)