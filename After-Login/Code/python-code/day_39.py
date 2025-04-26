# Day 39 Python file
import random

def reverse(s):
  str = ""
  for i in s:
      str = i + str
  return str

def encrypt(s):
  if len(s) == 1:
    if s == "a":
      s = "v"
      return addRanChar(s,3)
    else:
      s = "l"
      return addRanChar(s,3)
  elif len(s) == 2:
    return addRanChar(reverse(s),3)
  elif s.count(" ") > 0:
    list = s.split(" ")
    list2 = []
    for x in list:
      word = encrypt(x)
      list2.append(word)

    word2 = ""
    for w in list2:
      word2 = word2 + " " + w
    return word2[1:len(word2)]
  elif len(s) >= 3:
    s2 = ""
    for i in range(0,len(s),2):
      if(len(s)%2==0):
        s1 = s[i+1] + s[i]  
        s2 = s2 + s1 
      else:
        if i == len(s)-1:
          s2 = s2 + s[len(s)-1]
          continue
        s1 = s[i+1] + s[i] 
        s2 = s2 + s1
    return addRanChar(reverse(s2),3)
  else:
    exit("Invalid message")
def addRanChar(s,n):
  for i in range(n):
    s = random.choice('0123456789abcdefghijklmnopqrstuvwxyz') + s + random.choice('0123456789abcdefghijklmnopqrstuvwxyz')
  return s  

def remRanChar(s):
    return s[3:-3]

def decrypt(s):
  if s.count(" ") > 0:
    list = s.split(" ")
    list2 = []
    for x in list:
      word = decrypt(x)
      list2.append(word) 
    word2 = ""
    for w in list2:
      word2 = word2 + " " + w
    return word2[1:len(word2)]
  elif s.count(" ") == 0:
    s = remRanChar(s)
    if len(s) == 1:
      if s[0] == "v":
        return "a"
      else:
        return "i"
    elif len(s) == 2:
      s = reverse(s)
      return s
    elif len(s) >= 3:
      s2 = ""
      for i in range(0,len(s),2):
        if(len(s)%2==0):
          s1 = s[i+1] + s[i]
          s2 = s2 + s1 
        else:
          if i == len(s)-1:
            s2 = s[0] + s2
            continue
          s1 = s[i+2] + s[i+1]
          s2 = s2 + s1 
      return reverse(s2)
  else:
    exit("Invalid message")
choice = input("1.Encryption\n2.Decrypt\nWhat would you like to do ? : ")
choiceInLower = choice.lower()

if choiceInLower == "1" or choiceInLower == "encryption":
  msgToEncrypt = input("Enter the message: ").lower()
  print("Here is your encrypted message:",encrypt(msgToEncrypt),end="")

elif choiceInLower == "2" or choiceInLower == "decryption":
  msgToDecrypt = input("Enter the message: ").lower()
  print("Here is your decrypted message:",decrypt(msgToDecrypt),end="")

else:
  print("Invalid choice")
  
