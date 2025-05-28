start = int(input("Enter start year: "))
end = int(input("Enter end year: "))
def leap (start,end):
    if start >= end:
        print("Check your year input again.")
    else:
        print ("Here is a list of leap years between " + str(start) + " and " + str(end)  + ":")

    while start < end:
        if start % 4 == 0 and start % 100 != 0:
            print(start)
        if start % 100 == 0 and start % 400 == 0:
            print(start)
        start += 1

leap(start,end)