# Day 12 Python file
 # String methods
name = "!!Avinash!!!"
str1 = "avinash is a good boy"
str2 = "WelcomeToBCAWorld22"

#1. len()
print(len(name))

#2. upper()
print(name.upper())

#3. lower()
print(name.lower())

#4. rstrip()
print(name.rstrip("!"))

#5. replace()
print(name.replace("Avi","P"))

#6.split()
print(str1.split(" "))

#7.capitalize()
print(str1.capitalize())

#8.center()
print(len(str1))
print(len(str1.center(50)))
print(str1.center(50))

#9.count()
print(str1.count("is"))

#10.endswith()
print(str1.endswith("boy"))
print(str1.endswith("is",4,10))

#11.find()
print(str1.find("is"))
print(str1.find("ish")) #retuens -1

#12.index()
print(str1.index("is"))
# print(str1.index("ish")) Gives error

#13.isalnum()
print(str2.isalnum())

#14.isalpha()
print(str1.isalpha())

#15.islower()
print(str1.islower())

#16.isprintable()
print(str1.isprintable())

#17.isspace()
str3 = "  "
print(str3.isspace())

#18.istitle()
print(str1.istitle())

#19.isupper()
print(str1.isupper())

#20.startswith()
print(str1.startswith("avinash"))

#21.swapcase()
print(str1.swapcase())

#22.title()
print(str1.title())
print(str1.title().istitle())