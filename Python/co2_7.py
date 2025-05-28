def ing(newstr):
    if newstr[-3:]=="ing":
       newstr=newstr+"ly"
    else:
       newstr=newstr+"ing"
    return newstr
str=input("Enter the string")
modify=ing(str)
print("New string:",modify)
