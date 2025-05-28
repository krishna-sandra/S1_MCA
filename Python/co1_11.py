def largest(a, b, c):
    if a >= b:
        if a >= c:
            return a
        else:
            return c
    else:
        return b
num1 = float(input("Enter the first number: "))
num2 = float(input("Enter the second number: "))
num3 = float(input("Enter the third number: "))

number = largest(num1, num2, num3)
print(f"The largest of {num1}, {num2}, and {num3} is: {number}")

# def largest(a, b, c):
#     if a >= b and a >= c:
#         return a
#     elif b >= a and b >= c:
#         return b
#     else:
#         return c


# num1 = float(input("Enter the first number: "))
# num2 = float(input("Enter the second number: "))
# num3 = float(input("Enter the third number: "))


# number = largest(num1, num2, num3)
# print(f"The largest of {num1}, {num2}, and {num3} is: {number}")