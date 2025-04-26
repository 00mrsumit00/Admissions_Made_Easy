# Day 62 Python file
class Library:
  def __init__(self):
    self.Books = ['Python','Java','PHP','C','JavaScript','C++','MySQL','Wings of fire']
    self.books = []
    for i in self.Books:
      self.books.append(i.lower())
    self.noOfBooks = 8
   
  def services(self):
    self.choice = int(input("Select a option : \n1. Show available books\n2. Issue a book\n3. Return a book\n"))
    if self.choice > 0 and self.choice < 4:
      return self.choice
    else:
      self.prinLine()
      print("Invalid choice\nTry again")
      self.services()
      
  def intro(self):
    print("Welcome to our library".center(50))

  def showBooks(self):
    print(f"Following {self.noOfBooks} book are available in library :")
    for sr_no,book in enumerate(self.books,start=1):
      print(f"{sr_no}. {book.capitalize()}")
      
  def issueBook(self):
    self.issue = input("Enter book name: ").lower()
    if self.issue in self.books:
      self.books.remove(self.issue)
      print(f"{self.issue} is issued")
    else:
      print(f"{self.issue} is not available in library")
      
  def returnBook(self):
    self.retBook = input("Which book are you returning : ")
    self.books.append(self.retBook)
    self.noOfBooks = len(self.books)
    print(f"{self.retBook} is submitted to library")
    
  def greeting(self):
    print("Thanks for using our library services")

  def prinLine(self):
    print("_______________________________________________________")

obj = Library()
while True:
  obj.intro()
  obj.prinLine()
  num = obj.services()
  if num == 1:
    obj.prinLine()
    obj.showBooks()
  elif num == 2:
    obj.prinLine()
    obj.issueBook()
  else:
    obj.prinLine()
    obj.returnBook()
  obj.prinLine()
  wanToExit = input("Press y to continue or press n to exit : ").lower()
  if wanToExit != "y":
    obj.prinLine()
    obj.greeting()
    break