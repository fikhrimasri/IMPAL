# -*- coding: utf-8 -*-
"""
Created on Mon Apr  1 10:39:21 2019

@author: Asus
"""

# import library SimpleXMLRPCServer
from xmlrpc.server import SimpleXMLRPCServer
from skimage import io
from skimage import feature

# import xmlrpc bagian client
import xmlrpc.client

# buatlah fungsi bernama download()
def file_download():

    # buka file bernama "file_didownload.txt"
    # with open("kisi-kisi UTS.txt",'rb') as handle:
    	image = open("surf.jpg","rb")
    	edges = feature.canny(image)
        # kirimkan file tersebut dalam bentuk xml dengan cara memanggil xmlrpc.client.Binary()
        return xmlrpc.client.Binary(image.read())

# buat server pada IP dan port yang telah ditentukan
server = SimpleXMLRPCServer(("192.168.1.106", 8001))

# print bahwa "server mendengarkan pada port xxx"
print ("Listening on port 8001")

# register fungsi download pada server
server.register_function(file_download, 'file_download')

# jalankan server
server.serve_forever()