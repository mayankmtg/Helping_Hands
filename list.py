import json
file=open("viraj.txt",'r+')
myfile=open("data.json",'w+')
lis=[]
lis=file.read().split()
json.dump(lis,myfile)
file.close()
myfile.close()
