from flask import Flask,request,Response
import pandas as pd
import matplotlib.pyplot as plt
from sklearn.cluster import KMeans
import numpy as np
import pickle

app = Flask(__name__)


@app.route("/data",methods=['POST'])
def getData():
    r = request
    WT=r.form['WT']
    IS=r.form['IS']
    IP=r.form['IP']
    SPM=r.form['SPM']
    CC=r.form['CC']
    score = (WT+IS+IP+SPM+CC)//5
    loaded_model=pickle.load(open('final_model.sav','rb'))
    
    mydict={2:"Excellent",1:"Moderate",0:"Poor"}
    result=loaded_model.predict([[score,score]])

    return mydict[result[0]]
    

if __name__ == "__main__":
    app.run(debug=True)