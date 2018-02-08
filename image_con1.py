import os, sys
import PIL
from PIL import Image
path = ('/home/vinay/uploads/')
path1 = ('/home/vinay/new_uploads/')

text_files = [f for f in os.listdir(path)]
count = 0
for file in text_files:
    size = os.path.getsize(path+file)

    foo = Image.open(path+file)
    foo = foo.resize((180,300), Image.ANTIALIAS) 
    foo.save(path1+file, optimize=True, quality=95)


print (count)
