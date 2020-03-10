import sys
import math

# Auto-generated code below aims at helping you parse
# the standard input according to the problem statement.

number_of_days = int(input())
category = {
    'FAT': 0,
    'CARB': 0,
    'FIBER': 0
}
dish_ingredient = []
dish_list = []
print_string = ""
for ingredient in input().split():
    if "FAT" in ingredient:
        category['FAT'] += 1
    elif "FIBER" in ingredient:
        category['FIBER'] += 1
    elif "CARB" in ingredient:
        category['CARB'] += 1
    total = category['FAT'] + category['CARB'] + category['FIBER']

    dish_ingredient.append(ingredient)
    
    #print(print_string)
    if total >= 3:
        #print("total",total)
        #print("before",category)
        if category['FAT'] >= 2 or category['CARB'] >= 2 or category['FIBER'] >= 2:
            print_string +="1"
            dish_list.append(ingredient)
            for item in dish_ingredient:
                if len(dish_list) < 3:
                    dish_list.append(item)
            for dish in dish_list:
                if "FAT" in dish and category['FAT'] > 0:
                    category['FAT'] -= 1
                elif "FIBER" in dish and category['FIBER'] > 0:
                    category['FIBER'] -= 1
                elif "CARB" in dish and category['CARB'] > 0:
                    category['CARB'] -= 1
            dish_ingredient = (list(set(dish_ingredient) - set(dish_list)))
        else:
            print_string += "0"
    #print(dish_list)   
        dish_list = []     
    #print(category)
    else:
        print_string += "0"
print(print_string)