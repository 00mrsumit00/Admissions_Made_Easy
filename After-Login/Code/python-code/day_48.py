# Day 48 Python file
# Writing in the files
# f = open("myfile.txt",'w')
# f.write("Hello world")
# f.close()

# Reading from files
# f = open('myfile.txt','r')
# text = f.read()
# print(text)
# f.close()

# Appending in the files
f = open('myfile.txt','a')
f.write('\nThis is appending in the file')
f.close()

# with statement
with open('myfile.txt','r') as f:
  text = f.read()
  print(text)