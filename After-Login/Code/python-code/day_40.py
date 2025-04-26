# Day 40 Python file
a = 2
b = 330
print("A") if a > b else print("=") if a == b else print("B")

c = 9 if a > b else 10
print(c)

print("A") if a > b else ""

print("Maximum number is",(lambda x,y:x if x > y else y)(a,b))
