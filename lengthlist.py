def longestlist(a):
    max=len(a[0])
    temp=a[0]

    for i in a:
        if len(i) > max :
            max = len(i)
            temp=i
    print("The word  is:", temp, " and length is ", max)

a=["apple","orange","grapes","watermelon"]
longestlist(a)