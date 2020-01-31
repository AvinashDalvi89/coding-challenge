import pandas

sample = [{'id': '1', 'fnamae': 'Rasab', 'lname': 'Asdaf', 'Age': 21, 'Language': ['python', 'json'], 'parents': {'mother': {'name': 'Mrs. Mother', 'phone': '1212121212'}, 'father': {'name': 'Mr. Father', 'phone': '1212121212'}}, 'siblings': [{'name': 'jamuna', 'phone': 564851312}, {'name': 'Killana', 'phone': 1212121212}]}, {'id': '2', 'fnamae': 'Muddassir', 'lname': 'Jameel', 'Age': 25, 'Language': ['React', 'json'], 'parents': {'mother': {'name': 'Mrs. Mutherinlaw', 'phone': 9654512}, 'father': {'name': 'Mr. Futherinlaw', 'phone': 53154278}}, 'siblings': [{'name': 'Giallan', 'phone': 998742568}, {'name': 'Simba', 'phone': 12355875}]}, {'id': '3', 'fnamae': 'Farhan', 'lname': 'Akhtar', 'Age': 25, 'Language': ['Drupal', 'PHP'], 'parents': {'mother': {'name': 'Heung min son', 'phone': 89546487}, 'father': {'name': 'Kane', 'phone': 4564823545}}, 'siblings': [{'name': 'Xamcs', 'phone': 78654325}, {'name': 'sinfbad', 'phone': 45648232}]}]

s = sample[0]['siblings']
df2 = pandas.DataFrame(s.str[0].values.tolist())
print(df2)