import pandas as pd
import matplotlib.pyplot as plt
from sklearn.cluster import KMeans
import numpy as np
import pickle
df = pd.DataFrame(data={"x0":[1,2,3,7,8,10,12,13], 'x1':[1,2,3,7,8,10,12,13]})

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

sLength = len(df['x0'])

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
