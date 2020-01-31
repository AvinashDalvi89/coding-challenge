if __name__ == '__main__':
    N = int(raw_input())
    list_test = []
    for i in range(N):
        command = raw_input()
        command_array = command.split(" ")
        if command_array[0] == "print":
            print list_test
        elif command_array[0] == "reverse":
            if list_test:
                list_test.reverse()
        elif command_array[0] == "sort":
            if list_test:
                list_test.sort()
        elif command_array[0] == "pop":
            if list_test:
                list_test.pop()
        elif command_array[0] == "remove":
            for i in range(1,len(command_array)):
                if int(command_array[i]) in list_test:
                    list_test.remove(int(command_array[i])) 
        elif command_array[0] == "append":
            for i in range(1,len(command_array)): 
                list_test.append(int(command_array[i])) 
        elif command_array[0] == "insert": 
            list_test.insert(int(command_array[1]), int(command_array[2]))
    

