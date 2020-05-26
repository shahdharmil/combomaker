import mysql.connector
import numpy as np
import pandas as pd
import csv
from mlxtend.preprocessing import TransactionEncoder
import math
def pricecalculator(m1,m2):
    aa=m1;
    bb=m2;
    #if(aa!=None and bb!=None):
        
        
        #print(aa)
        #print(bb)
    mydb = mysql.connector.connect(
        host="localhost",
        user="root",
        passwd="dhruvil",
        database="cafe"
        )
    mycursor = mydb.cursor()
    mycursor.execute("select max from menu where name='"+aa+"';")
    myresult = mycursor.fetchone()
    amax=str(myresult)
    #print(amax)
    mydb = mysql.connector.connect(
        host="localhost",
        user="root",
        passwd="dhruvil",
        database="cafe"
        )
    mycursor = mydb.cursor()
    mycursor.execute("select min from menu where name='"+aa+"';")
    myresult = mycursor.fetchone()
    amin=str(myresult)
    #print(amin)
    amax=amax.replace('(','').replace(')','').replace(',','')
    amin=amin.replace('(','').replace(')','').replace(',','')
    #print(amax)
    #print(amin)
    mydb = mysql.connector.connect(
        host="localhost",
        user="root",
        passwd="dhruvil",
        database="cafe"
        )
    mycursor = mydb.cursor()
    mycursor.execute("select max from menu where name='"+bb+"';")
    myresult = mycursor.fetchone()
    bmax=str(myresult)
    #print(bmax)
    mydb = mysql.connector.connect(
        host="localhost",
        user="root",
        passwd="dhruvil",
        database="cafe"
        )
    mycursor = mydb.cursor()    
    mycursor.execute("select min from menu where name='"+bb+"';")
    myresult = mycursor.fetchone()
    bmin=str(myresult)
    #print(bmin)
    bmax=bmax.replace('(','').replace(')','').replace(',','')
    bmin=bmin.replace('(','').replace(')','').replace(',','')
    #print(bmax)
    #print(bmin)
    amax=int(amax)
    bmax=int(bmax)
    amin=int(amin)
    bmin=int(bmin)
    sum1=0
    sum2=0
    sum1=amax+bmin
    sum2=amin+bmax
    #print(sum1)
    #print(sum2)
    if(sum1>sum2):
        mydb = mysql.connector.connect(
            host="localhost",
            user="root",
            passwd="dhruvil",
            database="cafe"
            )
        mycursor = mydb.cursor()    
        #mycursor.execute("insert into price(sum) values("+sum1+");")
        return(sum1)
    else:
        mydb = mysql.connector.connect(
            host="localhost",
            user="root",
            passwd="dhruvil",
            database="cafe"
        )
        mycursor = mydb.cursor()    
        #mycursor.execute("insert into price(sum) values("+sum2+");")
        return(sum2)
def listToStringWithoutBrackets(a):
    return str(a).replace('(','').replace(')','').replace(',','').replace("'",'')
dataset=[]



mydb = mysql.connector.connect(
  host="localhost",
  user="root",
  passwd="dhruvil",
  database="cafe"
)
mycursor = mydb.cursor()

mycursor.execute("select distinct name from user1 where id=(select max(id) from user1);")

myresult = mycursor.fetchone()
a=str(myresult)
b=listToStringWithoutBrackets(a)
print(b)
filename='C:/xampp/htdocs/youtube/Registration/uploads/%s'%b
with open(filename, 'r') as csvFile:
    reader = csv.reader(csvFile)
    for row in reader:
        dataset.append(row)
csvFile.close()



frequent_itemsets=[]

te = TransactionEncoder()
te_ary = te.fit(dataset).transform(dataset)
df = pd.DataFrame(te_ary, columns=te.columns_)

from mlxtend.frequent_patterns import apriori
frequent_itemsets = apriori(df, min_support=0.35, use_colnames=True)
frequent_itemsets['length'] = frequent_itemsets['itemsets'].apply(lambda x: len(x))

frequent_itemsets[ (frequent_itemsets['length'] == 1) & (frequent_itemsets['support'] >= 0.8) ]
from mlxtend.frequent_patterns import association_rules
ar = association_rules(frequent_itemsets, metric="confidence", min_threshold=0.9)
df_ar = pd.DataFrame(ar)

df_ar[["antecedents", "consequents","antecedent support","consequent support" ,"support", "confidence"]]
frequent_itemsets=frequent_itemsets[ (frequent_itemsets['length'] == 2) & (frequent_itemsets['support'] >= 0.3) ]
d=frequent_itemsets['itemsets']
h=str(d)
t=str(h).replace('1','').replace('2','').replace('3','').replace("4",'').replace('5','').replace('6','').replace('7','').replace("8",'').replace("9",'').replace("0",'').replace(" ",'').replace('Name:itemsets,dtype:object','').replace('(','').replace(')','')
print(t)


frequent_itemsets=frequent_itemsets[ (frequent_itemsets['length'] == 2) & (frequent_itemsets['support'] >= 0.3) ]
a=frequent_itemsets['itemsets']
b=str(a)
c=str(b).replace('1','').replace('2','').replace('3','').replace("4",'').replace('5','').replace('6','').replace('7','').replace("8",'').replace("9",'').replace("0",'').replace(" ",'').replace('Name:itemsets,dtype:object','')
c=c.replace('(','').replace(')',',').replace('\n','')
#print(c)
n=c.split(",")
#print(n)
n=list(n)
#print(n)
l=len(n)
l=int(l/2)
a=0
a=int(a)
with open('C:/xampp/htdocs/youtube/Registration/output.txt', 'w') as file:
    file.write(str(t))
f=open('C:/xampp/htdocs/youtube/Registration/output1.txt','r+')
f.truncate(0)
mydb = mysql.connector.connect(
        host="localhost",
        user="root",
        passwd="dhruvil",
        database="cafe"
        )
mycursor = mydb.cursor()
mycursor.execute("truncate table price;")
for i in range(l):
    m1=n[0+a]
    m2=n[1+a]
    a=a+2
    z=pricecalculator(m1,m2)
    with open('C:/xampp/htdocs/youtube/Registration/output1.txt', 'a') as file:
        
        file.write(str(z))
        file.write("\n")
    print(z)
    
filenames=[output.txt,output1.txt,output2.txt]
with open('output2.txt','w')as outfile:
    for fname in filenames:
        with open(fname) as infile:
            outfile.write(infile.read())
