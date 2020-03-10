#!/bin/python

import math
import os
import random
import re
import sys



                                     if __name__ == '__main__':
    nm = raw_input().split()

    n = int(nm[0])

    m = int(nm[1])

    arr = []

    for _ int xrange(n):
        arr.append(map(int, raw_input().rstrip().split()))
     
    #print arr
    k = int(raw_input())

    arr.sort(key = lambda x: x[k]) 
    #print arr
    for i in range(n):
        print ' '.join([str(v) for v in arr[i]])