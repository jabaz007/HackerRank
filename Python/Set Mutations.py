# Enter your code here. Read input from STDIN. Print output to STDOUT
al, A = int(input()), set(map(int, input().split()))
nl = int(input())

for i in range(nl):
    a = input().split()[0]
    s = set(map(int, input().split()))
    
    if a == 'intersection_update':
        A.intersection_update(s)
    if a == 'update':
        A.update(s)
    if a == 'symmetric_difference_update':
        A.symmetric_difference_update(s)
    if a == 'difference_update':
        A.difference_update(s)
print(sum(A))