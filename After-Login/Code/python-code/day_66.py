# Day 66 Python file
class Employee:
  companyName = "Apple"
  @classmethod
  def changeName(cls,newName):  # Here the 'cls' is class passed to function
    cls.companyName = newName
  def show(self):    # Here the 'self' is instance passed to function
    print(f"The company name is {self.companyName}")

emp1 = Employee()
emp1.show()
emp1.changeName("Netflix")
emp1.show()

emp2 = Employee()
emp2.show()