a= input("Enter the first string: ")
b= input("Enter the second string: ")

newstr1= b[0] + a[1:]
newstr2= a[0] + b[1:]

print(a,'',b)
print("The new string after swapping characters at position 1:",newstr1,'',newstr2)