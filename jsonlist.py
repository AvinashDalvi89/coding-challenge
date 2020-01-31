# f=open("file.txt","w")
# list=['hello','how are you?']
# for a in list:
#         f.write(a)
#         f.write('\n')
# f.close()

# f = open('./resource/review.txt','r')

# content = f.read()
 
# print(content)

# f.close()

with open('file.txt', 'r') as f:
    for line in f:
        if "samantha" in line:
            print next(line) 