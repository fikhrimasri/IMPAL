# -*- coding: utf-8 -*-
"""
Created on Mon Apr  1 11:05:34 2019

@author: Asus
"""

# import xmlrpc bagian client
import xmlrpc.client

# buat proxy untuk mengakses server. Gunakan parameter URL server yang akan diakses berupa IP dan port. Bentuk http://IP:port
s = xmlrpc.client.ServerProxy("http://192.168.3.10:8001/")

# buat/buka file baru dengan nama "hasil_download.txt" sebagai hasil download dari server
with open("receivedFileDownload.txt","wb") as handle:
    
    # tulis/isi file hasil_download.jpg dengan hasil dari memanggil fungsi "download" yang berada server
    # ubah file menjadi binary dengan menambahkan .data
    handle.write(s.file_download().data)
    handle.close()
    print("Done")