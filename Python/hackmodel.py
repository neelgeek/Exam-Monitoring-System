import pandas as pd
import matplotlib.pyplot as plt
from sklearn.cluster import KMeans
import numpy as np
import pickle
df = pd.DataFrame(data={"x0":[7,
12,
30,
5,
25,
22,
7,
7,
25,
15,
6,
30,
29,
20,
8,
25,
12,
17,
17,
26,
7,
25,
4,
30,
15,
12,
29,
30,
25,
6,
15,
17,
29,
29,
29,
10,
25,
5,
30,
], 'x1':[
    30,
18,
15,
22,
27,
14,
30,
17,
12,
30,
25,
25,
15,
30,
20,
30,
7,
17,
25,
15,
24,
30,
28,
17,
15,
4,
30,
30,
29,
4,
16,
7,
29,
28,
28,
20,
22,
27,
30

]})
df['total']=df['x0']+df['x1']
df['total1']=df['x0']+df['x1']
df = df.drop("x0", axis=1)
df = df.drop("x1", axis=1)
kmeans=KMeans(n_clusters=3,init='random')  

model=kmeans.fit(df)
y_kmeans=model.predict(df)
c=kmeans.cluster_centers_
print(c)
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
