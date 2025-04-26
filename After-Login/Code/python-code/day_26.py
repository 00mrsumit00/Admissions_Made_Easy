# Day 26 Python file
studentNames = ("Avinash", "Sumit", "Mayur", "Omkar", "Shailesh")
print(studentNames)
tempList = list(studentNames)
tempList.append("Omiie")
tempList.pop(3)
tempList[2] = "Aaditya"
tempList.insert(2, 311)
print(tempList)

studentNames = tuple(tempList)
print(studentNames)
