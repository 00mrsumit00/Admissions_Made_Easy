# Day 70 Python file
from day_71 import Employee
e = Employee("Avinash","Vange")
# print(e.name)
# print(len(e))

print(e)        # Calls __str__() by deafault
print(str(e))        # Calls __str__()

print(e)        # Calls __repr__() if __str__() is not present
print(repr(e))        # Calls __repr__()

e()