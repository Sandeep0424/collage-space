import hmac 
import hashlib  
import binascii 
file = open('Test.txt', 'r') 
lines = file.readlines() 
def create_sha512_signature(key, message): 
    byte_key = binascii.unhexlify(key)     
    message = message.encode()     
    return hmac.new(byte_key, message, hashlib.sha512).hexdigest().upper() 
for index, line in enumerate(lines): 
    encrypt = create_sha512_signature("E49756B4C8FAB4E48222A3E7F3B97CC3", line) 
    with open('encrypted.txt', 'a') as f: 
      f.write(encrypt) 
      f.write('\n')     
      print(encrypt) 
    file.close() 
