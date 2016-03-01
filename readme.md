#Chacon Radio Relay
This project aims to assist developers who need to control their Chacon sockets.


##Usage
**NB : ** do not forget to do `chmod +x ./radioEmission` if you have an executing issue.

###radioEmission
*It allow to send **on** or **off** state by the transmitter*

**Compile** with `g++ radioEmission.cpp -o radioEmission -lwiringPi`
**Exec** with ```./radioEmission 0 12325261 1 on```

- `0` : the WiringPi number of the PIN on the Raspberry where is connected the 433mHz transmitter. (0 correspond to PIN 11)
- `12325261` : arbitrary code for the number of the remote control.
- `1` : arbitrary receiver code
- `on` : state of the socket

###radioReception
*It allow to do action written in the **radioReception.php** page*

**Compile** with `g++ radioReception.cpp -o radioReception -lwiringPi`
**Add authorization** with `sudo chmod 777 radioReception`
**Exec** with `./radioReception ./radioReception.php  7`

- the *first* parameter is the php code to execute
- the *second* parameter is the wirigingPi number of the PIN 

###chaconGetRemote
*It allow to get the remote code in RCsend format*

**Compile** with `g++ HEreceive.cpp -o HEreceive -lwiringPi`
