# Enter your code here. Read input from STDIN. Print output to STDOUT
tc = int(input())
ans = []

for i in range(tc):
    n = int(input())
    c = list(map(int, input().split()))

    for _ in range(n - 1):
        if c[0] >= c[len(c) - 1]:
            a = c[0]
            c.pop(0)
        elif c[0] < c[len(c) - 1]:
            a = c[len(c) - 1]
            c.pop(len(c) - 1)
        else:
            pass

        if len(c) == 1:
            ans.append("Yes")

        if (c[0] > a) or (c[len(c) - 1] > a):
            ans.append("No")
            break

print("\n".join(ans))
