# Enter your code here. Read input from STDIN. Print output to STDOUT
import email.utils
import re

reg = re.compile(r'^[A-Za-z][\w\.-]+@[A-Za-z]+\.[A-Za-z]{1,3}$')
for _ in range(int(input())):
    parsed = email.utils.parseaddr(input())
    if re.fullmatch(reg, parsed[1]):
        print(email.utils.formataddr(parsed))