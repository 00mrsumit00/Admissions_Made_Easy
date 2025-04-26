# Day 78 Python file
class Vehicle:
  def __init__(self,name):
    self.name = name
  
class Car(Vehicle):
  def __init__(self,name,model):
    super().__init__(name)
    self.model = model
    
  def showDetails(self):
    print(f"The name of the company is {self.name} and the model is {self.model}")
    
class Truck(Vehicle):
  def __init__(self,name,model):
    super().__init__(name)
    self.model = model

  def showDetails(self):
    print(f"The name of the company is {self.name} and the model is {self.model}")

class CarTruck(Car,Truck):
  def __init__(self,name,model):
    super(Car,self).__init__(name,model)
    self.model = model

  def showDetails(self):
    print(f"The name of the company is {self.name} and the model is {self.model}")
    
c = Car("TATA","Nexon")
c.showDetails()

t = Truck("TATA","Eicher")
t.showDetails()

ct = CarTruck("TATA","CarTruck")
ct.showDetails()

