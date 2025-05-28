def starpattern(n):
    for i in range(1,n+1):
        for j in range(1,i+1):
            print("* ",end=" ")
        print("\n")
    for i in  reversed(range(1,n)):
        for j in range(1,i+1):
            print("* ",end=" ")
        print("\n")
n=int(input("Enter the range"))
starpattern(n)