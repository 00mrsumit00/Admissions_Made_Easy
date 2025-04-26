# Day 59 Python file
class MyClass:
  def __init__(self,x):
    self.rent = x
  def show(self):
    print(f"The total rent is {self.rent}Rs")
    
  @property    #getter, getter does not take parameters
  def revenue(self):
    return 10 * self.rent
    
  @revenue.setter    #setter, setter take parameters
  def revenue(self,new_rev):
    self.rent = new_rev/10
    
obj = MyClass(12000)
obj.show()
print(f"The total revenue is {obj.revenue}Rs")
obj.revenue = 140000
obj.show()
print(f"The total revenue is {obj.revenue}Rs")
    