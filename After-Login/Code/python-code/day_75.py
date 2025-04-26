# Day 75 Python file
class Animal:
  def __init__(self,name,sound):
    self.name = name
    self.sound = sound

  def animal_sound(self):
    print(f"The sound of {self.name} is {self.sound} p")

class Cat(Animal):
  def animal_sound(self):
    print(f"The sound of {self.name} is {self.sound} c")

c = Cat("cat","meow")
c.animal_sound()

# Calls the parent class method with child class object
super(Cat,c).animal_sound()    

a = Animal("Dog","Bhau")
a.animal_sound()