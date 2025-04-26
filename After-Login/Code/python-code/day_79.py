# Day 79 Python file

import win32com.client as w
import time
speaker = w.Dispatch("SAPI.SpVoice")

l = ["Avinash","Vishal","Sumit","Mayur","Ooomkar","Aaditya","Sagar","Nakul"]

speaker.speak(f"The students of BCA third year are")
for name in l:
    speaker.speak(name)
speaker.speak("Thank you")  

