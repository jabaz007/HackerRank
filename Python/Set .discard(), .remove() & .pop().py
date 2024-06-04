n = int(input())
s = set(map(int, input().split()))

c = int(input())
for i in range(c):
    lst = input().split()
    
    if lst[0] == 'pop':
        try:
            s.pop()
        except KeyError as e:
            continue
    
    if lst[0] == 'remove':
        try:
            s.remove(int(lst[1]))
        except KeyError as e:
            continue
    
    if lst[0] == 'discard':
        try:
            s.remove(int(lst[1]))
        except KeyError as e:
            continue
    
print(sum(s))