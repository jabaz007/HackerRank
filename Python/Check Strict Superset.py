# Enter your code here. Read input from STDIN. Print output to STDOUT
a, n = set(map(int, input().split())), int(input())
result = 'True'

for i in range(n):
    b = set(map(int, input().split()))
    
    if a.issuperset(b) & (a != b):
        result = 'True'
    else:
        result = 'False'
        break
        
print(result)