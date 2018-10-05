from flask import Flask,request,Response
import pandas as pd
import matplotlib.pyplot as plt
from sklearn.cluster import KMeans
import numpy as np
import pickle

app = Flask(__name__)

@app.route("/")
def hello():
    loaded_model=pickle.load(open('final_model.sav','rb'))
    var=int(input("Enter Score:"))
    mydict={2:"Excellent",1:"Moderate",0:"Poor"}
    result=loaded_model.predict([[var,var]])

    return mydict[result[0]]
   

@app.route("/data",methods=['POST'])
def getData():
    r = request
    name = r.form['name']
    return name

if __name__ == "__main__":
    app.run(debug=True)