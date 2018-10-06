import pandas as pd
import matplotlib.pyplot as plt
from sklearn.cluster import KMeans
import numpy as np
import pickle
df = pd.DataFrame(data={"x0":[7,25,22,7,30,12,5,7], 'x1':[30,14,22,18,30,27,15,17]})
df['total']=df['x0']+df['x1']
df['total1']=df['x0']+df['x1']
df = df.drop("x0", axis=1)
df = df.drop("x1", axis=1)
kmeans=KMeans(n_clusters=3,init='random')  

model=kmeans.fit(df)
y_kmeans=model.predict(df)
c=kmeans.cluster_centers_
mylist=[]


for i in range(0,3):
    mylist=mylist+[c[i][0]]

mylist.sort()


c[0][0]=mylist[0]
c[0][1]=mylist[0]
c[1][0]=mylist[1]
c[1][1]=mylist[1]
c[2][0]=mylist[2]
c[2][1]=mylist[2]

mydict={2:"Excellent",1:"Moderate",0:"Poor"}

sLength = len(df['total'])

df=df.assign(Class=pd.Series(model.predict(df), index=df.index))

df["ClassName"]=[('Poor' if (Class==0) else
                       'Moderate' if (Class==1) else 'Excellent')
                      for Class in df['Class']]
df = df.drop("Class", axis=1)


filename='final_model.sav'
pickle.dump(model,open(filename,'wb'))


print(df)
loaded_model=pickle.load(open(filename,'rb'))
result=loaded_model.predict([[27,27]])
print(mydict[result[0]])
