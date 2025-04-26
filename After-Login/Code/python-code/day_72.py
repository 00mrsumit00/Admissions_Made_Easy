# Day 72 Python file
class Shape:
  def __init__(self,x,y):
    self.l = x
    self.w = y

  def area(self):
    return self.l * self.w

class Circle(Shape):
  def __init__(self,radius):
    self.radius = radius

  def area(self):
    return 3.14 * self.radius * self.radius

rec = Shape(4,6)
print(f"The area of rectangle is {rec.area()}")

c = Circle(3)
print(f"The area of circle is {c.area()}")
