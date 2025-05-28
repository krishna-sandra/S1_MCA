string= input("Enter a string: ")
first=string[0]
result=first + string[1:].replace(first,'$')
print(string)
print(result)