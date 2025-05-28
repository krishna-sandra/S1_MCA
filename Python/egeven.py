def evendigit(num):
    return all(int(i)%2==0 for i in str(num))
def even(start,end):
    square=[]
    for num in range(start, end+1):
        if evendigit(num):
            root=int(num**0.5)
            num=root**2
        square.append(num)
        return square
            