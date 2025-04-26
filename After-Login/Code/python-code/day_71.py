# Day 71 Python file
class Employee:
  def __init__(self,name,lastname):
    self.name = name
    self.lastname = lastname

  def __len__(self):  # Magic method
    return len(self.name)

  def __str__(self):
    return f"The Employee name is {self.name} {self.lastname} str"
    
  def __repr__(self):
    return f"The Employee name is {self.name} {self.lastname} repr"

  def __call__(self):
    print("Hey, I am call method")
