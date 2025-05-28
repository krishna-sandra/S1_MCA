def evendigit(num):
    return all(int(i)%2==0 for i in str(num))
def evensquare(start,end):
    square = []
    for num in range(start, end + 1):
        if evendigit(num):
            root=int(num**0.5)
            if root**2==num:
                square.append(num)
    return square
start_range = 1000
end_range = 9999

result = evensquare(start_range, end_range)
print(result)