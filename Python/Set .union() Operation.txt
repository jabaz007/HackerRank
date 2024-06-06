# Enter your code here. Read input from STDIN. Print output to STDOUT
n1 = int(input())
n1s = set(input().split())
n2 = int(input())
n2s = set(input().split())
print(len(n1s.union(n2s)))