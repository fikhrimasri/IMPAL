# -*- coding: utf-8 -*-
"""
Created on Tue Apr  2 22:27:50 2019

@author: Asus
"""

# import xmlrpc bagian client
import xmlrpc.client

# buat stub proxy client
s = xmlrpc.client.ServerProxy("http://192.168.3.10:9999/")

# buka file yang akan diupload
with open("receivedFileDownload.txt",'rb') as handle:
    # baca file dan ubah menjadi biner dengan xmlrpc.client.Binary
    data = xmlrpc.client.Binary(handle.read())

# panggil fungsi untuk upload yang ada di server
s.file_upload(data)
print("done")