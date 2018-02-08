import os, sys
import PIL
from PIL import Image
path = ('/home/vinay/new_uploads/')
path1 = ('/home/vinay/new_uploads/')

text_files = [f for f in os.listdir(path)]
count = 0
for file in text_files:
    size = os.path.getsize(path+file)
    if(size>100000):
        count += 1
        print (path+file, size)

print (count)
