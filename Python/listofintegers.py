l1=[]
n=int(input("enter the number of elements in a list1:"))
print("Enter",n,"elements")
for i in range(0,n):
   l1.append(int(input()))

l2=[]
m=int(input("enter the number of elements in a list2:"))
print("Enter",m,"elements")
for i in range(0,m):
   l2.append(int(input()))
print(l1)
print(l2)
if len(l1)==len(l2):
  print("both list are same length")
else:
  print("both list are not same length")
if sum(l1)==sum(l2):
    print("sum of both list are same")
else:
    print("sum of both list are not same")
for x in l1:
   for y in l2:
      if x==y:
         print("common elements",x)
