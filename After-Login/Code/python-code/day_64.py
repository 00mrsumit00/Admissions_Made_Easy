# Day 64 Python file
class Employee:
  companyName = "Netflix"    # Class variable
  noOfEmp = 0
  def __init__(self,name):
    self.name = name          # Instance variable
    self.raise_amount = 0.02
    Employee.noOfEmp += 1
  def showDetails(self):
    print(f"The employee name is {self.name},\nwho is working in {self.companyName} sized {self.noOfEmp} and got raise of {self.raise_amount}")

emp1 = Employee("Avinash")
emp1.showDetails()
# Employee.showDetails(emp1)

emp2 = Employee("Sumit")
emp2.companyName = "Google"    # Change the value for only this instance not for class instance
emp2.showDetails()

Employee.companyName = "Microsoft"    # Change the value for class instance
emp3 = Employee("Mayur")
emp3.showDetails()
