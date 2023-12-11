def pyramid():
    n=int(input("Enter the step number:"))
    for i in range(1,n+1):
        for j in range(1,i+1):
           print(j*i,end=" ")
        print("\n")

def steppyramid():
    for i in range(1,6):
        for j in range(0,i):
           print(j*i,end=" ")
        print("\n")
    for i in range(4,0,-1):
        for j in range(0,i):
           print(j*i,end=" ")
        print("\n")