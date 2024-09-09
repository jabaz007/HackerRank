# Enter your code here. Read input from STDIN. Print output to STDOUT
import re

for i in range(int(input())):
    number = input()
    
    if len(number) == 10 and number.isdigit():
        ans = re.findall("^[789]", number)
        if len(ans) == 1:
            print("YES")
        else:
            print("NO")
    else:
        print("NO")