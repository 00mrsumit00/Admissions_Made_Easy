# Day 54 Python file
import random
def printline():
  print("_______________________________________________________")
while True:
  comChoice = random.choice("012")
  while True:
    printline()
    userChoice = int(input("0 for snake, 1 for water, 2 for gun\nEnter your choice: "))
    if userChoice < 0 or userChoice > 2:
      print("Invalid choice\nPlease choosea number between 0, 1 & 2")
      printline()
    else:
      break
  
  if userChoice == comChoice:
    print("It's a tie")
  elif userChoice == 0:
    if comChoice == 1:
      print("Computer choose water and you choose snake\nYou win...")
      printline()
    else:
      print("Computer choose gun and you choose snake\nYou loose...")
      printline()
  elif userChoice == 1:
    if comChoice == 0:
      print("Computer choose snake and you choose water\nYou loose...")
      printline()
    else:
      print("Computer choose gun and you choose water\nYou win...")
      printline()
  elif userChoice == 2:
    if comChoice == 0:
      print("Computer choose snake and you choose gun\nYou win...")
      printline()
    else:
      print("Computer choose water and you choose gun\nYou loose...")
      printline()
  else:
    print("Something went wrong!")
  
  playAgain = input("Play again ? \nPress y to continue n to quit: ").lower()
  if not playAgain == "y":
    break