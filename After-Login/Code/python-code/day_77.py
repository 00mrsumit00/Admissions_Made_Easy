# Day 77 Python file
class Mall:
  def __init__(self,x,y):
    self.ele1 = x
    self.ele2 = y

  def showDetails(self):
    print("Here are the electronics like",self.ele1,self.ele2)

class Store(Mall):
  def __init__(self,x,y):
    self.inst1 = x
    self.inst2 = y

  def showDetails(self):
    Mall.showDetails(self)
    print("Here are some instruments like",self.inst1,self.inst2)


class Customer(Store):
  def __init__(self,id,name,store_item1,store_item2,mall_item1,mall_item2):
      Store.__init__(self,store_item1,store_item2)
      Mall.__init__(self,mall_item1,mall_item2)
      self.cus_id = id
      self.cus_name = name

  def showDetails(self):
    Store.showDetails(self)
    print(f"The name of the customer is {self.cus_name} and customer id is {self.cus_id}\n{self.cus_name} is buying {self.inst1} and {self.inst2} from store and {self.ele1} and {self.ele2} from mall.")


avi = Customer(129,"Avinash","Grocery","Vegetables","Mobile","PS5")
avi.showDetails()

# Print that where a method or variable is searched first
print(Customer.mro())


