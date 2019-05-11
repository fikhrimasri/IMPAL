# -*- coding: utf-8 -*-
"""
Spyder Editor

This is a temporary script file.
"""
# import library socket karena akan digunakan request reply protocol sederhana
import socket

# definisikan IP dan port dari webserver yang akan kita gunakan. Port HTTP adalah 80
ip = "localhost"
port = 80

# buat socket bertipe TCP
s = socket.socket(socket.AF_INET, socket.SOCK_STREAM)

# lakukan binding 
s.bind((ip,port))
print ("Socket berhasil dibuat")

# socket mendengarkan
s.listen(5)     
print ("Listening ...") 

# tampilkan dengan print () "Server berjalan dan melayani HTTP pada port xx"
print("Server berjalan dan melayani HTTP pada port",port)

# loop forever
while True:
    # socket menerima koneksi
    c, addr = s.accept()
    
    # socket menerima data
    data = c.recv(1024)
    
    # print data hasil koneksi
    print(data)
    
    # buat response sesuai spesifikasi HTTP untuk diberikan kepada client
    http_response = """\HTTP/1.1 200 OK

<html>
<head>
<title>Web Server Sederhana</title>
</head>
<body>

<h1>Heading 1</h1>
<p>Ini adalah contoh paragraf.</p>
<img src="https://www.surfertoday.com/images/stories/surfetiquette.jpg">

</body>
</html>
"""
    # kirim response kepada client dengan sendall() jangan lupa diencode response dengan utf-8 
    c.send(http_response.encode())
    
    # tutup koneksi
    c.close()

# Selamat! Kamu telah berhasil membuat web server sederhana. 
