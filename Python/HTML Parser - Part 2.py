from html.parser import HTMLParser

class MyHTMLParser(HTMLParser):
    def handle_comment(self, data):
        if '\n' not in data:
            print('>>> Single-line Comment')
            print(data)
        elif '\n' in data:
            print('>>> Multi-line Comment')
            print(data)
         
    def handle_data(self, data):
        if data != '\n':
            print('>>> Data')
            print(data)
  
parser = MyHTMLParser()
parser.feed(''.join([input().strip() for i in range(0, int(input()))]))
parser.close()