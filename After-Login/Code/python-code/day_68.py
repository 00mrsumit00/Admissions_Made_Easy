# Day 68 Python file
class Person:
  def __init__(self,name,age):
    self.name = name
    self.age = age

p = Person("Avinash",21)
# print(p.__dict__)     # Return all isinstance data in dictionary format
print(help(Person))          # Provide help 
x = [1,2,3]
print(dir(x))          # dir() method
print(x.__dir__)
