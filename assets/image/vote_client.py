# -*- coding: utf-8 -*-
"""
Created on Mon Apr  1 10:29:34 2019

@author: Asus
"""

# import xmlrpc bagian client saja
import xmlrpc.client

# buat stub (proxy) untuk client
s = xmlrpc.client.ServerProxy('http://192.168.3.10:8008')

# lakukan pemanggilan fungsi vote("nama_kandidat") yang ada di server
print(s.vote_candidate("isol"))

# lakukan pemanggilan fungsi querry() untuk mengetahui hasil persentase dari masing-masing kandidat
print(s.querry())

# lakukan pemanggilan fungsi lain terserah Anda
#print(s.system.listMethode())