# Day 50 Python file
# seek()
with open('myfile.txt','r') as f:
  f.seek(10)        # Moves position to 10th byte
  print(f.tell())   # It returns the no. of seeking bytes
  text = f.read()   # Start reading from 11th byte
  print(text)

with open('sample.txt','w') as s:
  s.write("Hello world")
  s.truncate(5)   # It is used after write() function to truncate the file

with open('sample.txt','r') as s:
  print(s.read())

  

