# Day 17 Python file
choice = input("Enter your choice \n( + / - / x / (/) ) : ")
a = int(input("Enter first number: "))
b = int(input("Enter second number: "))

match choice:
  case "+":
    print("The addition of a and b is :",a+b)
  case "-":
    print("The subtraction of a and b is :",a-b)
  case "x":
    print("The multiplication of a and b is :",a*b)
  case "/":
    print("The division of a and b is :",float(a/b))
  case _:
    print("Enter a valid choice")

