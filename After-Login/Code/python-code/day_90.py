# Day 90 Python file
import asyncio
import requests


# await keyword is used to wait a function to finish execution of functions before it
async def func1():
  url = "https://images.pexels.com/photos/842711/pexels-photo-842711.jpeg"
  response = requests.get(url)
  open("img1.jpeg","wb").write(response.content)
  print("func 1")
  return "Avi"
  
async def func2():
  url = "https://images.pexels.com/photos/842711/pexels-photo-842711.jpeg"
  response = requests.get(url)
  open("img2.jpeg","wb").write(response.content)
  print("func 2")
  return "Vishal"
  
async def func3():
  url = "https://images.pexels.com/photos/842711/pexels-photo-842711.jpeg"
  response = requests.get(url)
  open("img3.jpeg","wb").write(response.content)
  print("func 3")
  return "Sumit"

# async def main():
#   # ceate_task() function is used to create a task which executes when it gets time to execute
#   task = asyncio.create_task(func1())
#   # await func1()
#   await func2()
#   await func3()

# Another way to schedule tasks concurrently
async def main():
  L = await asyncio.gather(
    func1(),
    func2(),
    func3()
  )
  print(L)

# run() is used to call main()
asyncio.run(main())