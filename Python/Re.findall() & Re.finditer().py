# Enter your code here. Read input from STDIN. Print output to STDOUT
import re

k = re.findall(r'(?<=[^aeiouAEIOU])[aeiouAEIOU]{2,}(?=[^aeiouAEIOU])',input())

if k:
    for i in k:
        print(i)
else:
    print(-1)