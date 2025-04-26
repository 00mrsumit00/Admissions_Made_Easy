# Day 88 Python file
from plyer import notification
import time
import win32com.client as w

speaker = w.Dispatch("SAPI.SpVoice")

reminder_message = "Drink water!"

t = time.localtime()
for_time = int(time.strftime("%H",t))

if for_time > 8 or for_time < 23:
  while True:
    notification.notify(
      title = "Reminder",
      message = reminder_message,
      timeout = 5
    )
    speaker.speak("Avinash Drink water")
    time.sleep(3600)