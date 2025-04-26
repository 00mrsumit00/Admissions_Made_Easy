# Day 74 Python file
'''
__add__ magic method
__add__ magic method is used to add the attributes of the class instance. For example, let’s say object1 is an instance of a class A and object2 is an instance of class B and both of these classes have an attribute called ‘a’, that holds an integer. When the operation object1 + object2 is done the __add__ method implicitly adds the attributes of these instances like object1.a + object2.a, if defined so.
'''
class Vector:
  def __init__(self,i,j,k):
    self.i = i
    self.j = j
    self.k = k 

  def __str__(self):
    return f"{self.i}i + {self.j}j + {self.k}k"
    
  def __add__(self,x):
    return Vector(self.i+x.i,self.j+x.j,self.k+x.k)
  
  def __sub__(self,x):
    return Vector(self.i-x.i,self.j-x.j,self.k-x.k)

class V2(Vector):
  def __init__(self,i,j,k):
    self.i = i
    self.j = j
    self.k = k 


v1 = Vector(5,7,3)
print(v1)



v2 = V2(4,6,8)
print(v2)

print(v1 + v2)
print(type(v1 + v2))

