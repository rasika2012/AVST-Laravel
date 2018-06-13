#new Uploaded
#2ndTest
import cv2
import requests
import base64
import json
#import RPi.GPIO as GPIO
import os
import time
#GPIO.setmode(GPIO.BCM)
#GPIO.setup(18,GPIO.IN)


def getSpeed():
    NUM_CYCLES=2
    #GPIO.wait_for_edge(18,GPIO.FALLING)
    start=time.time()
    #for impulze in range(NUM_CYCLES):
       # GPIO.wait_for_edge(18,GPIO.FALLING)
    duration=time.time()-start
    frequency=NUM_CYCLES/duration
    speed=frequency/float(31.36)
    return speed


def upload(file_name):
    speed="23"
    b64 = base64.b64encode(open(file_name, 'rb').read())
    speed=raw_input()
    values = {'location': Unit_Location, 'speed': speed, 'image': 'data:image/png;base64,' + b64}
    headers = {
        'User-Agent': 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.90 Safari/537.36',
        'Content-type': 'application/json'}
    t1=time.time()
    upload_res = requests.post(url, json=values, headers=headers, verify=True)
    t1=time.time()-t1
    print(upload_res)
    print(t1)

	
def snap():
    camera = cv2.VideoCapture(camID)
    return_value, image = camera.read()
    camera.release()
    #image=cv2.cvtColor(image, cv2.COLOR_BGR2GRAY)
    cv2.imwrite(Device_ID + str(0) + '.png', image)
    upload(Device_ID + str(0) + '.png')



i = 0
while 1:
    raw_input('Press Enter to capture' + str(i))
    snap()
    i = i + 1
execfile("Updater")