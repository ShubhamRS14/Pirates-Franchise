l1= [5,6,8,1,8,10,9,10,9,9,11]
max= l1[0]
max2= l1[1]
if max < max2:
    max, max2 = max2, max
    for item in l1:
        if max < item:
            max2= max
            max= item
        else:
            if max2 < item and max > item:
                max2 = item
print(f'max is {max}, max2 is {max2}')
print("max is:",max,"max2 is :",max2)