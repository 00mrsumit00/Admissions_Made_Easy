# Day 67 Python file
class Rectangle:
  def __init__(self,height,width):
    self.height = height
    self.width = width

  def area(self):
    print(f"The area of rectangle is",self.height * self.width)

  @classmethod      # Alternative constructor
  def fromStr(cls,str):
     return cls(str.split("-")[0],str.split("-")[1])
    
r1 = Rectangle(10,10)
r1.area()

str = "10-20"
r2 = Rectangle.fromStr(str)