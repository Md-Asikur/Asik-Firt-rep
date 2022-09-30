const person = { fname: "John", lname: "Doe", age: 25, date: 5, name: "ashikur" };
text = "";
for (let x in person) {
   text +=person[x];
   document.write(text+"<br/>");
}
