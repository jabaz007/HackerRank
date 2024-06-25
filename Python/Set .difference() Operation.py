# Enter your code here. Read input from STDIN. Print output to STDOUT

e, el = map(int, input()), set(map(int, input().split()))
f, fl = map(int, input()), set(map(int, input().split()))

print(len(el.difference(fl)))
