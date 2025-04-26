# Day 37 Python file
def item():
  try:
    dict = [12,54,123,8374,76,938,42,92349]
    key = int(input("Enter a index: "))
    print(dict[key])
    return 1
  except Exception as e:
    print(e)
    return 0
  finally:
    print("This finally block executes in any situation even after break and return")

x = item()
print(x)