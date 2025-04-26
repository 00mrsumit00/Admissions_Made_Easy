# Day 69 Python file
class Employee:
  def __init__(self,name,id):
    self.name = name
    self.id = id

  def parent_method(self):
    print(f"Name = {self.name},id = {self.id}")
    print("Method of parent class")

class Programmer(Employee):
  def __init__(self,name,id,lang):
    self.lang = lang
    super().__init__(name,id)  # Calling parent class constructor
  def child_method(self):
    print(f"Name = {self.name},id = {self.id} and language = {self.lang}")
    print("Method of child class")
    super().parent_method()    # Calling parent class method

p1 = Programmer("Avinash",123,"Python")
p1.parent_method()
p1.child_method()
