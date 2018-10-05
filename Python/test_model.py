import pickle
loaded_model=pickle.load(open('final_model.sav','rb'))
var=int(input("Enter Score:"))
mydict={2:"Excellent",1:"Moderate",0:"Poor"}
result=loaded_model.predict([[var,var]])

print(mydict[result[0]])
