l1=[[1,1,1],[1,1,1,],[1,1,1]]
x,y=map(int,input("Enter two numbers").split())
x-=1
y-=1
l1[x][y]=0
for i in l1:
    print(i,"")
print("\n")