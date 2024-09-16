import numpy

n, m = map(int, input().strip().split(' '))

lst = list()
for _ in range(n):
    lst.append(input().strip().split(' '))

arr = numpy.array(lst, int)

print(arr.transpose())
print(arr.flatten())