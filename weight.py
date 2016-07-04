#!/usr/bin/python

import serial

def is_number(s):
    try:
        int(s)
        return True
    except ValueError:
        return False

ser = serial.Serial(
   port='/dev/ttyAMA0',
   baudrate = 9600,
   parity=serial.PARITY_NONE,
   stopbits=serial.STOPBITS_ONE,
   bytesize=serial.EIGHTBITS,
   timeout=1
)

while True:
	weight = ser.readline().strip()
	if is_number(weight):
    		print "%i" % (int(weight))
		break
