import numpy

n, m, p = map(int, input().split())
arr1 = list()
arr2 = list()
for _ in range(n):
    arr1.append(input().strip().split(' '))
for _ in range(m):
    arr2.append(input().strip().split(' '))
arr1 = numpy.array(arr1, int)
arr2 = numpy.array(arr2, int)
print(numpy.concatenate((arr1, arr2), 0))