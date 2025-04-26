# Day 89 Python file
import re

text = '''Cake Elon Reeve Musk (/ˈiːlɒn/ EE-lon; born June 28, 1971) is a businessman and investor. He is the founder, chairman, CEO, and chief technology officer of SpaceX; angel investor, CEO, product architect and former chairman of Tesla, Inc.; owner, chairman and CTO of X Corp.; founder of the Boring Company Bake and xAI; co-founder of Neuralink and OpenAI; and president of the Musk Foundation. He is the wealthiest person in the world, with an estimated net worth of US$232 billion as of December 2023, according to the Bloomberg Billionaires Index, and $254 billion according to Forbes, primarily from his ownership stakes in Tesla and SpaceX.
'''

patterm = r"[A-Z]ake"
# match = re.search(patterm,text)
# print(match)

matches = re.finditer(patterm,text)
for match in matches:
  print(match.span())
  print(text[match.span()[0]:match.span()[1]])


# match.span() is a tuple,
# [match.span()[0] means start of span and [match.span()[1] means end of span
