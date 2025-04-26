# Day 81 Python file
import argparse
import requests

def download_file(url,local_filename):
  if local_filename is None:
    local_filename = url.split('/')[-1]
  # NOTE the stream=True parameter below
  with requests.get(url, stream=True) as r:
      r.raise_for_status()
      with open(local_filename, 'wb') as f:
          for chunk in r.iter_content(chunk_size=8192): 
              # If you have chunk encoded response uncomment if
              # and set chunk_size parameter to None.
              #if chunk: 
              f.write(chunk)
  return local_filename


parser = argparse.ArgumentParser()

# Adding command line arguments
parser.add_argument("url",help="Url to download the file")
# parser.add_argument("output",help="by which name do you want to save the file")
parser.add_argument("-o","--output",help="by which name do you want to save the file",default=None)

# Parse arguments
args = parser.parse_args()

# Use the argument in your code
print(args.url)
print(args.output)
download_file(args.url,args.output)

