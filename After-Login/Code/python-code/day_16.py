# Day 16 Python file
import time
# timestamp = time.strftime('%H:%M:%S')
# print(timestamp)
hour = int(time.strftime('%H'))
min = int(time.strftime('%M'))
sec = int(time.strftime('%S'))

if hour >= 00 and hour < 12:
  print("Good morning")
elif hour >= 12 and hour < 16:
  print("Good afternoon")
elif hour >=16 and hour <22:
  print("Good evening")
else:
  print("Good night")
