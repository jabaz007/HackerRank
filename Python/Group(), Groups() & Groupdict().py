# Enter your code here. Read input from STDIN. Print output to STDOUT
import re
o = re.search(r'([a-zA-Z0-9])\1', input())
if o:
    print(o.group(1))
else:
    print(-1)
    