# Day 33 Python file
dict = {"name":"Avinash","Age":21,"Gender":"Male"}
print(dict)
print(dict['name'])  # Throws error if item not found
print(dict.get('name'))   # Return none if item not found

# Accessing values of a dictionary
print(dict.values())
for values in dict.values():
  print(f"The value is {values}")

# Accessing keys of a dictionary
print(dict.keys())
for key in dict.keys():
  print(f"The key is {key} and the value is {dict[key]}")

# Accessing the items as key and value pair
print(dict.items())
for key,values in dict.items():
  print(f"The key is {key} and the value is {values}")