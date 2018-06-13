#new Uploaded
#2ndTest

import cv2
import requests
import base64
import json

Unit_Location = '1'
Device_ID = 'AVST0001'
Software_Version = '001'
Key='455266435'
codeUrl = 'http://localhost:8000/unit/getCode'
url = 'http://localhost:8000/api/add1'
camID = 0



BLOCK_SIZE = 16
PADDING = '{'
pad = lambda s: s + (BLOCK_SIZE - len(s) % BLOCK_SIZE) * PADDING
EncodeAES = lambda c, s: base64.b64encode(c.encrypt(pad(s)))
DecodeAES = lambda c, e: c.decrypt(base64.b64decode(e)).rstrip(PADDING)
secret = "passkeypasskeyaa" 
iv='1234567890123456'
cipher = AES.new(secret, AES.MODE_CBC, iv)

def encryptData(tajnytext):
	encoded = EncodeAES(cipher, tajnytext)
	print (encoded)
	return encoded

def decryptData(data):
	decoded = DecodeAES(cipher, data)
	print (decoded)
	return decoded

encryptData("chathuranga")
print("decript")
encryptData(encryptData("chat")




def upload(file_name):
    b64 = base64.b64encode(open(file_name, 'rb').read())
    values = {'location': Unit_Location, 'speed': "60mph", 'image': 'data:image/png;base64,' + b64}
    headers = {
        'User-Agent': 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.90 Safari/537.36',
        'Content-type': 'application/json'}
    upload_res = requests.post(url, json=values, headers=headers, verify=True)
    print(upload_res)

	
def snap():
    camera = cv2.VideoCapture(camID)
    return_value, image = camera.read()
    camera.release()
    #image=cv2.cvtColor(image, cv2.COLOR_BGR2GRAY)
    cv2.imwrite(Device_ID + str(0) + '.png', image)
    upload(Device_ID + str(0) + '.png')

# Linear_Programe

i = 0
while i < 10:
    raw_input('Press Enter to capture' + str(i))
    snap()
    i = i + 1
