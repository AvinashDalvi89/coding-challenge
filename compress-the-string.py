# Enter your code here. Read input from STDIN. Print output to STDOUT
from itertools import groupby
if __name__ == '__main__':
    S = raw_input()
    number_list = map(int, S)
    #print number_list
    output = [list(g) for k,g in groupby(number_list)]
    #print output
    new_list = []
    for i in range(len(output)):
        new_list.append(tuple([len(output[i]), output[i][0]]))

    result = ' '.join('(%s, %s)' % v for v in new_list)
    print result