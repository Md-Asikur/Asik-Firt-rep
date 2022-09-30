const con = require('./connection');
const express = require('express');


const app = express();
const body=require('body-parser')
app.use(express.json());
app.use(express.urlencoded());
app.use(express.static('Main'))

app.get('/', (req, res)=>{
    res.sendFile(__dirname+'/Main/index.html');
  
});
app.post('/register', (req, res)=>{
    const name = req.body.name;
    const Fname = req.body.Fname;
   //print name and Fname
   
  //res.send(`<h1>your name is ${name} and your Fname is ${Fname}</h1>`);
   
   //Insert form data into table exp
   
   /* con.connect(function (error) {
       
        if (error) throw error;
        const sql = "INSERT INTO exp(name,Fname)VALUES('" + name + "','" + Fname + "')";
        con.query(sql, function (error, result) {
            if (error) throw error;
            res.send("Data Innserted" + result.insertId);
        });
    });*/
    
    //Select form data into table exp 
    //best practice for w3 schools website node mysql
    
    /*con.connect(function(err) {
  if (err) throw err;
  con.query("SELECT * FROM exp", function (err, result, fields) {
    if (err) throw err;
    console.log(result);
  });
});*/
    //For Everthing w3 schools is the one of the best pratical website
    //Go to w3 node mysql or mongodb database 
  
});
app.listen(8080, () => {
    console.log(`server started at :http://localhost:8080`);
});