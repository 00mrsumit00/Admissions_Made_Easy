# Day 61 Python file
# All variables are public by default in python
'''
Conventions are used for our better understanding of which variable is public,private or protected
''' 
class Student():
  def __init__(self,age,rollno,name):
    self.age = age            # Public variable
    self.__rollno = rollno    # Private variable
    self._name = name         # Protected variable
      

class Subject(Student):
  def show(self):
    print(f"The name of student is {self._name} and age is {self.age} and Roll number is {self._Student__rollno}.")

stud1 = Student(21,23795,"Avinash")

print(stud1.age)
print(stud1._name)
print(stud1._Student__rollno)    # Accessing private variable
sub1 = Subject(20,23001,"Shree")
sub1.show()

  