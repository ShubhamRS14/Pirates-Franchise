num1 = int(input("Enter first number: "))
num2 = int(input("Enter second number: "))

def calculate_hcf(x, y):
    global hcf
    if x > y:
        greater = x
    else:
        greater = y
    for i in range(1, greater + 1):
        if x % i == 0 and y % i == 0:
            hcf = i
    return hcf
print("The H.C.F of", num1, "and", num2, "is", calculate_hcf(num1, num2))

LCM = (num1 * num2 ) // hcf
print("The LCM of",num1, "and", num2,  "is", LCM)
