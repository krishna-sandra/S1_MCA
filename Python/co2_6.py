def character(string):
    char_freq={}
    for i in string:
        if i in char_freq:
            char_freq[i]+=1
        else:
            char_freq[i]=1
    for i, count in char_freq.items():      
        print(f"Character '{i}' occurs {count} times in the string.")
str= input("Enter a string:")
character(str)