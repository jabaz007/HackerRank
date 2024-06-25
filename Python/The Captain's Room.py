# Enter your code here. Read input from STDIN. Print output to STDOUT
k, lst = int(input()), list(map(int, input().split()))
s = set(lst)

roomSum = sum(lst)
roomSetSum = sum(s) * k
captiansRoom = (roomSetSum - roomSum) // (k - 1)
print(captiansRoom)