# Enter your code here. Read input from STDIN. Print output to STDOUT
nr = list(map(int, input().split()))
avg = list()

for i in range(nr[1]):
    avg.append(list(map(float, input().split())))

z = list(zip(*avg))

for a in z:
    print(sum(a)/nr[1])