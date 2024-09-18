import numpy

n = int(input().strip())

print(round(numpy.linalg.det(numpy.array([input().strip().split(' ') for _ in range(n)], float)), 2))