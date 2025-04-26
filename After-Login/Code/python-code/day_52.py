# Day 52 Python file
# MAP
def cube(x):
  return x*x*x
  
l = [1,2,3,4,5,6]
# newList = list(map(cube,l))
newList = list(map(lambda x:x**3,l))
print(newList)


# FILTER
def isGreater(x):
  return x > 3
# newList2 = list(filter(isGreater,l))
newList2 = list(filter(lambda x:x>3,l))
print(newList2)

# REDUCE
def mysum(x,y):
  return x + y
from functools import reduce
l2 = [3,6,8,3,9,2,8,10]
# sum = reduce(mysum,l2)
sum = reduce(lambda x,y:x+y,l2)
print(sum)

def maxNum(x,y):
 return x if x > y else y
# max = reduce(maxNum,l2)
# print(max)

max = reduce(lambda x,y: x if x > y else y,l2)
print(max)