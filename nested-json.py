data = [
 { "name" : "ABC", "parent":"DEF",  },
 { "name" : "DEF", "parent":"null" },
 { "name" : "new_name", "parent":"ABC" },
 { "name" : "new_name2", "parent":"ABC" },
 { "name" : "Foo", "parent":"DEF"},
 { "name" : "Bar", "parent":"null"},
  { "name" : "Chandani", "parent":"new_name", "relation": "rel", "depth": 3 },
  { "name" : "Chandani333", "parent":"new_name", "relation": "rel", "depth": 3 }
]
 


from benedict import benedict as bdict

# place here your dict/json data or the url that returns the json
data_src = '' 

# load data into benedict instance
data = [
 { "name" : "ABC", "parent":"DEF",  },
 { "name" : "DEF", "parent":"null" },
 { "name" : "new_name", "parent":"ABC" },
 { "name" : "new_name2", "parent":"ABC" },
 { "name" : "Foo", "parent":"DEF"},
 { "name" : "Bar", "parent":"null"},
  { "name" : "Chandani", "parent":"new_name", "relation": "rel", "depth": 3 },
  { "name" : "Chandani333", "parent":"new_name", "relation": "rel", "depth": 3 }
]

# adjust data
items = []
keys = list(data[0].keys())
for key in keys:
    item = bdict(data.get(key))
    # move all items to the top level
    items += list(item['children'])
    item['children'] = []
    items.append(item)
    break

# convert all parent_id values to int to allow comparison
for item in items:
    if 'parent' in item:
        item['parent'] = int(item['parent'])

# this is the code that really nest your list of dicts
items_dict = bdict({ 'items':items })
items_dict['items_nested'] = items_dict.nest('items', 
    id_key='name', parent_id_key='parent', children_key='children')
# now the dict contains the flat list and the nested list
print(items_dict.dump()) 