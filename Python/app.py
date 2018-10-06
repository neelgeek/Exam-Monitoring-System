from flask import Flask,request,Response,make_response,current_app  
import pandas as pd
import matplotlib.pyplot as plt
from sklearn.cluster import KMeans
import numpy as np
import pickle
from flask_cors import CORS

app = Flask(__name__)
CORS(app)

@app.route("/data",methods=['POST'])

def getData():
    r = request
    ut1=r.form['ut1']
    ut2=r.form['ut2']
    loaded_model=pickle.load(open('final_model.sav','rb'))
    
    mydict={2:"Excellent",1:"Moderate",0:"Poor"}
    result=loaded_model.predict([[ut1,ut2]])

    return mydict[result[0]]
    

if __name__ == "__main__":
    app.run(debug=True)