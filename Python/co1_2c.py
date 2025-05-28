word=input("Enter a word:")
vowels=[i for i in word if i.lower() in "aeiou" or i.upper()  in "AEIOU"]
print(vowels)