# Day 57 Python file
class Person():
  
  def __init__(self,name,age):
    self.name = name
    self.age = age
  def info(self):
    print(f"My name is {self.name} and i am {self.age} years old.")
  
  
a = Person("Avinash",21)
a.info()
b = Person("Vishal",22)
b.info()
