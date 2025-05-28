num = list(map(int, input("Enter a list of integers separated by spaces: ").split()))

# Step 2: Remove even numbers from the list
newlist= [i for i in num
                    if i % 2 != 0]

# Step 3: Print the original and filtered lists
print("Original list:", num)
print("List after removing even numbers:", newlist)