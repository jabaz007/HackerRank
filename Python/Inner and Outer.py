import numpy

a = numpy.array(input().strip().split(' '), int)
b = numpy.array(input().strip().split(' '), int)

print(numpy.inner(a, b))
print(numpy.outer(a, b))