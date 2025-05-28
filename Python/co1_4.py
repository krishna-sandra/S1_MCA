def wordcount(str):
    counts=dict()
    word=str.split()
    
    for i in word:
        if i in counts:
            counts[i]+=1
        else:
           counts[i]=1
    return counts
text=input("enter a sentence")
print( wordcount(text))
