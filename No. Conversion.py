def dec_to_hex(num):
    hex_representation={10:'A',11:'B',12:'C',13:'D',14:'E',15:'F'}
    l1= []
    while num>0:
        rem=num%16
        num= num//16
        if rem>9:
            l1.insert(0,hex_representation[rem])
        else:
            l1.insert(0,rem)
    return l1
print(dec_to_hex(31))