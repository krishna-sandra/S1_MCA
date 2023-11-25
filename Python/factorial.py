def fact(f):
    if (f==1 or f==0):
       return 1
    else:
       return (f*fact(f-1))
num=int(input("Enter the number:"))
print(num)
print(fact(num))