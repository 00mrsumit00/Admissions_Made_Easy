# Day 11 Python file
# String slicing in Python
name = "Avinash"
print(name[0:5])  # Including 0 but not 5

print(name[3:6])  # Including 3 but not 6

print(name[:6])  # By default 0 is taken as starting index

print(name[0:])  # By default length of string is taken as ending index

print(
    name[:])  # By default both 0 and length of string is taken as ending index

print(name[0:-3])  # Negative slicing
print(name[0:len(name) - 3])  # Both are same
