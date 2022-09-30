const exp = require('express');
var bodyParser = require('body-parser');

app = exp();
app.use(bodyParser.urlencoded({ extended: false }));
app.use(bodyParser.json());

app.get("/", function (req, res) {
   
    res.sendFile(__dirname + "/Views/Index.html");
  
    
});
app.get("/register", function (req, res) {
    res.sendFile(__dirname + "/Views/register.html");
});
app.get("/user/hi", function (req, res) {
    res.sendFile(__dirname + "/Views/hi.html");
});
app.get("/about", function (req, res) {
    res.sendFile(__dirname + "/Views/About.html");
});
app.post("/reg", function (req, res) {
    const name = req.body.name;
    const Fname = req.body.Fname;
   
    res.end(`Your name is ${name} and your Fname is ${Fname}`);
    
});
app.listen(8000, function () {
    console.log("successfully started server");
})