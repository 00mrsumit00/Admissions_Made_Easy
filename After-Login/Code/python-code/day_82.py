# Day 82 Python file
# a = True
# print(a := False)

# if age := int(input("Enter your age: ")) < 18:
#   print("You are a minor")
# else:
#   print("You are a adult")

l = [1,2,3,4,5]
while(n := len(l) > 0):
  print(l.pop())


fruit = list()
while food := input("Enter fruit name: ") != "quit":
    fruit.append(food)
 