# Day 22 Python file
# Default arguments
def average1(a=8,b=5):
  print("Average is: ",(a+b)/2)
  
average1()

# Keyword arguments
def name1(fname,mname,lname):
  print("Hello,",fname,mname,lname)

name1(fname="Vange",mname="Avinash",lname="Indrajeet")

# Required arguments 
def avg1(a,b):
  print("The average is : ",(a+b)/2)

avg1(7,12)

# Variable length arguments 
#  *before argument name for tuple
def average2(*numbers):
  print(type(numbers))
  sum = 0
  for i in numbers:
    sum = sum + i
  return sum/len(numbers)

avg2 = average2(5,6,7,3,8,1)
print("The average of given numbers is:",avg2)

#  **before argument name for dictionary
def name2(**name):
  print(type(name))
  print("Hello,",name['fname'],name['mname'],name['lname'])

name2(fname="Vange",mname="Avinash",lname="Indrajeet")