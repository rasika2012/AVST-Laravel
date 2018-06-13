from Crypto.Cipher import AES
import base64

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
encryptData(encryptData("chathuranga"))