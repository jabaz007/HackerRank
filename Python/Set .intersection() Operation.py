# Enter your code here. Read input from STDIN. Print output to STDOUT
n0 = int(input())
n0s = set(map(int, input().split()))

n1 = int(input())
n1s = set(map(int, input().split()))

print(len(n0s.intersection(n1s)))