import pandas as pd
import matplotlib.pyplot as plt
from sklearn.cluster import KMeans
import numpy as np
df = pd.DataFrame(data={"x0":[1,2,3,7,8,10,12,13], 'x1':[1,2,3,7,8,10,12,13]})

kmeans=KMeans(n_clusters=3,init='random')  

model=kmeans.fit(df)
y_kmeans=model.predict(df)
c=kmeans.cluster_centers_
mylist=[]
#print(c)

for i in range(0,3):
    mylist=mylist+[c[i][0]]

mylist.sort()
#print(mylist)

c[0][0]=mylist[0]
c[0][1]=mylist[0]
c[1][0]=mylist[1]
c[1][1]=mylist[1]
c[2][0]=mylist[2]
c[2][1]=mylist[2]

mydict={2:"Excellent",1:"Moderate",0:"Poor"}

sLength = len(df['x0'])

df=df.assign(Class=pd.Series(model.predict(df), index=df.index))
#df['Class'['Class'==0]]='Poor'
#df['Class'['Class'==2]]='Excellent'
#df['Class'['Class'==1]]='Moderate'

df["ClassName"]=[('Poor' if (Class==0) else
                       'Moderate' if (Class==1) else 'Excellent')
                      for Class in df['Class']]
df = df.drop("Class", axis=1)

print(df)




plt.scatter(df['x0'],df['x1'],c=y_kmeans,s=50,cmap='Set1')
plt.grid()
plt.scatter(kmeans.cluster_centers_[:,0],kmeans.cluster_centers_[:,1],c='black',s=200)
plt.show()

x=int(input("Enter marks to classify:"))

var=model.predict([[x,x]])
print(mydict[var[0]])
