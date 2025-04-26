# Day 56 Python file
class Person():
  name = "Avinash"
  occupation = "Software developer"
  networth = 1200000
  def info(self):
    print(f"{self.name} is a {self.occupation} and his networth is {self.networth}.")

a = Person()
a.name = "Vishal"
a.occupation = "Clerk"
a.networth = 1000
a.info()
b = Person()
b.info()
