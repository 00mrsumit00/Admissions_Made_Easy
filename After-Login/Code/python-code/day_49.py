# Day 49 Python file
# readlines()
f = open('myfile.txt','r')
while True:
  lines = f.readlines()
  for line in lines:
    print(line)
    m1 = line.split(",")[0]
    m2 = line.split(",")[1]
    m3 = line.split(",")[2]
    print(f"The marks of student1 in Maths are {m1}")
    print(f"The marks of student1 in Science are {m2}")
    print(f"The marks of student1 in English are {m3}")
  
  if not lines:
    break
f.close()

# writelines()
f = open('myfile2.txt','w')
lines = ['line 1','line 2','line 3']
f.writelines(lines)
f.close()
# for line in lines:
#   f.write(line + "\n")
