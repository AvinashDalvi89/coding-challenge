import argparse

parser = argparse.ArgumentParser()
parser.add_argument('--a', help="First parameter")
parser.add_argument('--b', help="First parameter")
args = parser.parse_args()
 
file = open('/var/www/html/research/coding-challenge/geek.txt','a') 
file.write("This is the write command") 
file.write("It allows us to write in a particular file") 
file.write(args.a+args.b)
 
file.close() 