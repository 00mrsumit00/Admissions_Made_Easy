# Day 32 Python file
# union() and update()
s1 = {1,2,3,5,4,6,7}
s2 = {2,3,7,4}

print(s1,s2)
print(s1.union(s2))
# s1.update(s2)
# print(s1)

# intersection() and intersection_update()
print(s1.intersection(s2))
# s1.intersection_update(s2)
# print(s1)

# symmetric_difference() and symmetric_difference_update()
print(s1.symmetric_difference(s2))
# s1.symmetric_difference_update(s2)
# print(s1)

# difference() and difference_update()
print(s1.difference(s2))
# s1.difference_update(s2)
# print(s1)

# isdisjoint()
print(s1.isdisjoint(s2))

# issupperset()
print(s1.issuperset(s2))

# issubset()
print(s2.issubset(s1))
# print(s1.issubset(s2))

# add()
s1.add("Avi")
print(s1)

# remove()/discard()
s1.remove("Avi")    # Throws error if item is not present
s1.discard("Avi")   # No error

# del set
# del s1  # delete all set

# clear()
s1.clear()   # delete all elements of set and print empty set
print(s1)

# pop()
delItem = s2.pop()   # delete a random item from set
print(s2,delItem)

# update()
s1.update(s2)
print(s1)

# in keyword
if "Avi" in s1:
  print("Present")
else:
  print("Absent")