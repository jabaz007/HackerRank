import numpy

n = int(input().strip())

a = numpy.array([input().strip().split(' ') for _ in range(n)], int)
b = numpy.array([input().strip().split(' ') for _ in range(n)], int)

print(numpy.dot(a, b))