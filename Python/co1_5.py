list1=[]
n=int(input("enter the number of elements in a list1:"))
print(f"enter {n} elements")# print("Enter",n,"elements")
for i in range(0,n):
   list1.append(int(input()))
print(list1)

result = ['over' if i > 100 else i for i in list1]
print(result)