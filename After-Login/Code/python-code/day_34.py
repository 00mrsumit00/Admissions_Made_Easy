# Day 34 Python file
info = {101: "Avinash", 102: "Vishal", 103: "Sumit", 104: "Mayur"}
info2 = {122: 45, 434: 87, 853: 35}

# update()
info.update(info2)
print(info)

# clear()
info2.clear()
print(info2)

# popitem()
info.popitem()
print(info)

# pop()
item = info.pop(104)
print(info)

# del 
del info[102]
print(info)
del info
