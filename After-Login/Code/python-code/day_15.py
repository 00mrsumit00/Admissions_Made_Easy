# Day 15 Python file
salary = int(input("Enter your salary : "))
while(True):
  gender = input("Enter your gender : ")
  newGender = gender.lower()
  if(newGender != "male" and newGender != "female"):
    print("Please enter a valid gender (male or female)")
  else:
    break

if salary >= 50000:
  if newGender == "female":
    print("Your bonus is ",salary,"+ 10000 = ",(salary+10000))
  elif newGender == "male":
    print("Your bonus is ",salary,"+ 5000 = ",(salary+5000))
elif salary < 50000:
  if newGender == "female":
    print("Your bonus is ",salary,"+ 5000 = ",(salary+5000))
  elif newGender == "male":
    print("Your bonus is ",salary,"+ 3000 = ",(salary+3000))
else:
  print("You are not eligible for bonus")