# Enter your code here. Read input from STDIN. Print output to STDOUT
n = int(input())

for i in range(n):
    ea = int(input())
    a = set(map(int, input().split()))
    eb = int(input())
    b = set(map(int, input().split()))
    
    print(a.issubset(b))