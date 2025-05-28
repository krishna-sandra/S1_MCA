import random

# Generate a random number
rand_num = random.randint(1, 100)

# Get user input
i = int(input("Guess a number between 1 and 100: "))

# Check the guess
if i == rand_num:
    print("Correct! You guessed the number.")
else:
    print(f"Incorrect! The correct number was {rand_num}.")
