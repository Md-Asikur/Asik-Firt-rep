$("#lg").click(function(){
    var pass1=$("#ps").val();
    var pass2=$("#em").val();

    if(pass1!="" && pass2!=""){
        if(pass1==pass2){
            alert("succesfully login")
        }
        else{
         alert("Login failed")
        }
        
    }
    else
    {
        alert("Enter your pass again")
    }
});
