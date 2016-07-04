<?php
   include "php_serial.class.php";

   // Let's start the class
   $serial = new phpSerial;

   // First we must specify the device.
   $serial->deviceSet("/dev/ttyAMA0");

   // Then we need to open it
   $serial->deviceOpen();

   // And to read from
   $read = $serial->readPort(30);
   echo ($read);
   
   // The device must be closed
   $serial->deviceClose();
?>
