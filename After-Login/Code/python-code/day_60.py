# Day 60 Python file
class Employee:
  def __init__(self,id,name):
    self.emp_name = name
    self.emp_id = id

  def showDetails(self):
    print(f"The employee id is {self.emp_id} and employee name is {self.emp_name}")

class Manager(Employee):
  def showManDet(self):
    print(f"The employee id is {self.emp_id} and employee is {self.emp_name}")

e1 = Employee(101,"Avinash")
e1.showDetails()

m1 = Manager(102,"shreenivas")
m1.showDetails()
m1.showManDet()
