def fib():
    x=int(input("Enter the range:"))
    a,b=0,1
    if(x<0):
        print("Enter a positive integer:")
    else:
        print(a)
        print(b)     
        for i in range(2,x):
            nxt=a+b
            print(nxt)
            a=b
            b=nxt
fib()