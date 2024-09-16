import numpy

numpy.set_printoptions(legacy='1.13')

arr = numpy.array(input().strip().split(' '), float)

print(numpy.floor(arr))
print(numpy.ceil(arr))
print(numpy.rint(arr))