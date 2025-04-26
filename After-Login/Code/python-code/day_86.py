# Day 86 Python file
def my_generator():
  for i in range(5):
    yield i

# gen is object of my_generator which is passed to next()
gen = my_generator()

# print(next(gen))
# print(next(gen))
# print(next(gen))
# print(next(gen))
# print(next(gen))

# other way to write a generator
for i in gen:
  print(i)