# Day 28 Python file
str = "Hello, my name is {} and i am from {}";
# str = "Hello, my name is {1} and i am from {0}";
name = input("Enter your name: ")
country = input("Enter your country: ")
print(str.format(name,country))

str2 = f"Hello, my name is {name} and i am from {country}"
print(str2)

print(f"We use f-string in python like this: f\"Hello, my name is {{name}} and i am from {{country}}\"")

print(f"{2*30}")