# Day 63 Python file
class Math:
  @staticmethod
  def add(a,b):
    return a+b

obj = Math()

# Not recommended
print(f"Addition = {obj.add(4,2)}")  # Calling static function with instance

# Recommended
result = Math.add(6,8)   # Calling static function with class name
print(f"Addition = {result}")   