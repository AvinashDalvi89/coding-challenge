from itertools import combinations
if __name__ == '__main__':
    N = raw_input()
    letter_list = raw_input().split(" ")
    K = int(raw_input())
    indices_list = [i+1 for i in range(len(letter_list))] 
    #print indices_list
    result = list(combinations(indices_list, K)) 
    # print(result)
    count = 0
    for combo in result:
        #print str(combo[0]) + str(combo[1])
        if letter_list[combo[0]-1] == 'a' or letter_list[combo[1]-1] == 'a':
            count = count+1
    
    print(float(count/float(len(result))))