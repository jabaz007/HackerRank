import numpy

lst = numpy.array(input().strip().split(' '), dtype=int)

print(numpy.zeros(lst, dtype=int))
print(numpy.ones(lst, dtype=int))