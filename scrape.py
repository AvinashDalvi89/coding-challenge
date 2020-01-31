# page_list = []
# link_list = []
# import requests
# from bs4 import BeautifulSoup

# def get_links(search_term):
#     google_search = requests.get(search_term)
#     soup = BeautifulSoup(google_search.text,'html.parser')
#     #print(soup.prettify())

#     result_div = soup.findAll('div', attrs={'class':'search-results'})
#     print(result_div)
#     data = {} 
#     for r in result_div:
#         for li in r.findAll('li'):
#             try:
#                 #print(li.find('a')['href'])
#                 data = {}
#                 data['url']  = li.find('a')['href'] 
#                 dateadded = li.find('div', {'class': 'dateadded'})
#                 #print(dateadded)
#                 data['dateAdded'] = dateadded.text.strip()
#                 link_list.append(data)
#             except:     
#                 pass

#     # for div in soup.findAll('div', {'class': 'dateadded'}):
#     #     url.append(div.text.strip())
       
     
     

#     # for r in result_div:
#     #     try:
#     #         data = {}
#     #         link = r.find('a',href=True)
#     #         #date_added = r.find('div',{'class':'dateadded'}).text.strip()
           
#     #         link_list.append(data)

#     #     except:     
#     #         pass
#     print(len(link_list))
#     print(link_list)
#      #page_list.append(link_list)
# search_term = "https://oilprice.com/search/tab/articles/crude_oil/"
# # for i in range(1, 704):
# #     if i == 1:
# #         link = search_term
# #     else:
# #         link = search_term+'Page-'+str(i)+'.html
# get_links(search_term)

filename = "geek.txt"
lines = tuple(open(filename, 'r')) 

print(lines)