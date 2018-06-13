import cv2
import requests
import base64
import json

import hashlib
#from Crypto import Random
#from Crypto.Cipher import AES
####################################################
Unit_Location = '1'
Device_ID = 'AVST0001'
Software_Version = '001'
Key='455266435'
codeUrl = 'http://192.168.8.104/unit/getCode'
url = 'http://192.168.8.104/api/add1'
camID = 1
###################################################

def getCode():
	
	r = requests.get(codeUrl)
	respond = r.json()
	#print(respond[1])
	#print(respond['code'])
	return respond['code']

def writeFile(code):
	file = open("unitCode.py","w")
	file.write(code)
	file.close()
while 1:
	print("updating")
	writeFile(getCode())
	print("updated")
	execfile("unitCode.py")
	

