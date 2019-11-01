Python 3.6.7 (v3.6.7:6ec5cf24b7, Oct 20 2018, 13:35:33) [MSC v.1900 64 bit (AMD64)] on win32
Type "help", "copyright", "credits" or "license()" for more information.
>>> import sqlite3
>>> conn = MySQLdb.connect('Housekeeping', user='admin', password='password')
Traceback (most recent call last):
  File "<pyshell#1>", line 1, in <module>
    conn = MySQLdb.connect('Housekeeping', user='admin', password='password')
NameError: name 'MySQLdb' is not defined
>>> conn = sqlite3.connect(db_file)
Traceback (most recent call last):
  File "<pyshell#2>", line 1, in <module>
    conn = sqlite3.connect(db_file)
NameError: name 'db_file' is not defined
>>> conn = sqlite3.connect("Housekeeping")
>>> 
