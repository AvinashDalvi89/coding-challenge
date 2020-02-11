# Enter your code here. Read input from STDIN. Print output to STDOUT
import itertools
if __name__ == '__main__':
    (K, N) = map(int, raw_input().strip().split(' '))
 
    L = list()
    for i in range(K):
        l = list(map(int, raw_input().strip().split(' ')))
        n = l[0]
        L.append(l[1:])
        assert len(L[i]) == n

    total_max = 0 
    total = 0 
    for l in itertools.product(*L):
        total = sum([x**2 for x in l]) % N

        if total > total_max:
            total_max = total 

    print(total_max)