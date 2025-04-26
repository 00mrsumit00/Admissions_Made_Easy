# Day 27 Python file
# KBC
listOfQuestions = ["1. Which is the largest country in the world according to area ?",
                   "2. Which is the largest country in the world according to popullation ?",
                   "3. What is the national language of India ?",
                   "4. Which country has the highest no. of forests ?",
                   "5. Who was the first President of India ?",
                   "6. Who is known as Father of Indian Constitution ?",
                   "7. Who was the first Prime Minister of India ?",
                   "8. Who invented Computer ?",
                   "9. 1024 Kilobytes is equal to ?",
                   "10. Brain of computer is ?",
                   "11. India lies in which continent ?",
                   "12. Which country are the Giza Pyramids in ?",
                   "13. How many Cricket world cups does India have ?",
                   "14. What city is the statue of liberty in ?",
                   "15. Smallest state of India is ?",
                   "16. Fastest animal on earth is ?"]

listOfAnswers = [["India", "USA", "Russia", "Japan", "Russia"],
                 ["India", "USA", "Russia", "Japan", "India"],
                 ["Hindi", "English", "Marathi", "None", "None"],
                 ["India", "USA", "Russia", "Japan", "Russia"],
                 ["Mahatma Gandhi", "Dr.B.R.Ambedkar", "Dr.Rajendra Prasad", "Jawaharlal Nehru", "Dr.Rajendra Prasad"],
                 ["Mahatma Gandhi", "Dr.B.R.Ambedkar", "Dr.Rajendra Prasad", "Jawaharlal Nehru", "Dr.B.R.Ambedkar"],
                 ["Mahatma Gandhi", "Dr.B.R.Ambedkar", "Dr.Rajendra Prasad", "Jawaharlal Nehru", "Jawaharlal Nehru"],
                 ["Dennis Ritchie", "Rich Miner", "White Sears", "Charles Babbage", "Charles Babbage"],
                 ["1MB", "1TB", "1PB", "1GB", "1MB"],
                 ["Processor", "CPU", "Memory", "OS", "CPU"],
                 ["Africa", "Asia", "Europe", "Antartica", "Asia"],
                 ["India", "South Africa", "Egypt", "Germany", "Egypt"],
                 ["1", "2", "3", "4", "2"],
                 ["New York", "Tokyo", "Mumbai", "Surat", "New York"],
                 ["Bihar", "Kerla", "Maharashtra", "Goa", "Goa"],
                 ["Elephant", "Dog", "Cheetah", "Tiger", "Cheetah"]]

listOfPrice = [1000,2000,3000,5000,10000,20000,40000,80000,160000,320000,640000,1250000,2500000,5000000,10000000,70000000]

def caseConversion(x):
  return [i.lower() for i in listOfAnswers[x]]
  
def checkAnswer(ans,correctAns):
  if ans == correctAns.lower():
    rightAns = True
    return rightAns
    
def printLine():
  print("----------------------------------------------------------------------------------")
  
itemFound = False
ansInNum = False
rightAns = False

for i in range(0,16):
  printLine()
  kbc = "KAUN BANEGA CROREPATI"
  print(kbc.center(80))
  printLine()
  while True:
     
      print(listOfQuestions[i])
      printLine()
      for sr in range(1,5):
        print(sr,".",listOfAnswers[i][sr-1])
      printLine()
      
      userAns = input("Choose correct option: ")
      userAnsSmallCase = userAns.lower()
      ansInLowerCase = caseConversion(i)
      
      for ind in range(0,4):
        if userAnsSmallCase == ansInLowerCase[ind] or userAnsSmallCase == str(ind+1):
          itemFound = True 
      if not itemFound:
        print("Invalid answer ... Please write correct option or choose number between 1 to 4")
        printLine()
        tryAgain = int(input("Try again ...press 1 to Continue and press 2 to Quit: "))
        if tryAgain == 1:
           print()
        else:
          printLine()
          if i == 0:
            print("You won 0 rupees")
          else:
            print("You won",listOfPrice[i-1],"rupees")
          exit("Thanks for playing\nAapka din shubh hoo")
      elif itemFound:
        itemFound = False
        for n in range(1,5):
          if userAnsSmallCase == str(n):
            ansInNum = True;
            userAnsSmallCase = ansInLowerCase[n-1]
            break
        if ansInNum:
            rightAns = checkAnswer(userAnsSmallCase,listOfAnswers[i][4])
          
            if rightAns:
              print("Congratulation, you won",listOfPrice[i],"rupees")
              printLine()
              if i == 15:
                exit("Congrtulation on winning 7 crore rupees")
              nextQues = input("Do you want to go to the next question ?\nPress y to continue and n to quit: ")
              if nextQues == "y":
                
                break
              else:
                printLine()
                exit("Thanks for playing \nAapka din shubh ho")
            
            else:
              printLine()
              
              print("Wrong answer")
              if i == 0:
                print("You won 0 rupees")
              else:
                print("You won",listOfPrice[i-1],"rupees")
              exit("Disqualified")
        else:
            rightAns = checkAnswer(userAnsSmallCase,listOfAnswers[i][4])
        
            if rightAns:
              print("Congratulation, you won",listOfPrice[i],"rupees")
              if i == 15:
                exit("Congrtulation on winning 7 crore rupees")
              printLine()
              nextQues = input("Do you want to go to the next question ?\nPress y to continue and n to quit: ")
              if nextQues == "y":
               
                break
              else:
                printLine()
                exit("Thanks for playing \nAapka din shubh ho")
            else:
              printLine()
              print("Wrong answer")
              if i == 0:
                print("You won 0 rupees")
              else:
                print("You won",listOfPrice[i-1],"rupees")
              exit("Disqualified")
              
        
        
            
              
    

  


    
  