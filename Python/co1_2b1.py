n = int(input("Enter the value of n: "))

# Generate a list of squares
squares = [i**2 for i in range(1, n+1)]

print(f"Squares of the first {n} numbers: {squares}")