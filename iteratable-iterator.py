
from itertools import combinations
if __name__ == '__main__':
    N = raw_input()
    letter_list = raw_input().split(" ")
    K = int(raw_input())  
    # print(result)
    count = 0
    length = 0
    for combo in combinations(letter_list, K):
        length+=1
        #print str(combo[0]) + str(combo[1]) 
        count+='a' in combo

    print float(count)/length