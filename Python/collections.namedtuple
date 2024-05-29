# Enter your code here. Read input from STDIN. Print output to STDOUT
from collections import namedtuple

# --------------- VERSION 1 - SIMPLE CODE
t = int(input())
Marks = namedtuple('Marks', list(input().split()))
tm = 0;
for i in range(t):
    MARKS, CLASS, NAME, ID = input().split()
    m = Marks(MARKS, CLASS, NAME, ID)
    tm = tm + int(m.MARKS)
print(tm/t)


# --------------- VERSION 2 - LESS THEN FOUR license
t, students = int(input()), namedtuple('students', list(input().split()))
stud = [students(*input().split()) for i in range(t)] 
print(sum([float (i.MARKS) for i in stud]) / t)


# --------------- VERSION 2 - LESS THEN FOUR license
from collections import namedtuple
t, students = int(input()), namedtuple('students', list(input().split()))
print(sum([float (i.MARKS) for i in [students(*input().split()) for i in range(t)]]) / t)
