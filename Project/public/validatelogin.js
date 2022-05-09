function Mobile()
{
    
    var mobile=document.getElementById("mobno").value;
    
 if(Number.isSafeInteger(mobile)) //&& mobile.length>=8)
    {
        document.getElementById("moberr").innerHTML="";
        
    }
    else 
    {
        
        document.getElementById("moberr").innerHTML="invalid Number";
        
        
    }
}


function username()
{
    var domains=[".com",".net",".org",".edu"]
    var un=document.getElementById("email").value;
    var check=un.substr((un.length-4),4);
   // if(check!=".com")
   if(domains.includes(check))
    {
        document.getElementById("error1").innerHTML="Your email is: "+un;
        
        //return (true);
        //return un;
    }
    else 
    {
        document.getElementById("error1").innerHTML="invalid email format";
        //return 0;
        
    }
    //return true;
}
function Checkpassword()
{
   
   var pw=document.getElementById("password").value;
   //console.log(pw.length); 
    if(pw.length<=5)
    {
        document.getElementById("error2").innerHTML="invalid password";
        return 0;
    }
    else 
    {
      
        document.getElementById("error2").innerHTML="Your password is: "+pw;
        document.getElementById("error2").style.color=white;
        return pw;
        
    }
return true;
}


function detail()
{
    if(username()!="")
  
    {
        
        document.getElementById("details").innerHTML="Your email is: "+un+ "And password is "+pw;
       
    }
    else 
    {
        document.getElementById("error3").innerHTML="";
        return false;
        
    }
    //var pw=document.getElementById("password").value;
    //var un=document.getElementById("email").value;
    alert("Your email is: "+un+ "And password is "+pw);
    //return false;
}