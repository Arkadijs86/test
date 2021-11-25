document.addEventListener("DOMContentLoaded", function() {

    

    var button = document.getElementById("butt");
 
   

        
        button.addEventListener("click", validateForm);

    }

);

function validateForm() {

  

    let x = document.getElementById("valid").value;
    if (x == "") {
      document.getElementById("texts").innerHTML = "Email address is required";
      document.getElementById("butt").disabled = true;
      return false;
    }
  
  else{
    document.getElementById("butt").disabled = false;
      

    document.getElementById("texts").innerHTML = "";
  
  }
    

    
    

      var pattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
      if (!x.match(pattern)) {
        document.getElementById("texts").innerHTML = "Please provide a valid e-mail address";
        document.getElementById("butt").disabled = true;
        return false;
      }
    
    else{
      document.getElementById("butt").disabled = false;
      document.getElementById("texts").innerHTML = "";
    }

      var y = document.getElementById("box").checked;
        if (y == false) {
          document.getElementById("texts").innerHTML = "You must accept the terms and conditions";
          document.getElementById("butt").disabled = true;
          return false;
        }
      
      else{
        document.getElementById("butt").disabled = false;
        document.getElementById("texts").innerHTML = "";
      }

      if (x.endsWith(".co") == true ) {
        document.getElementById("texts").innerHTML = "We are not accepting subscriptions from Colombia emails";
        document.getElementById("butt").disabled = true; 
        return false;
        }
        else{
          document.getElementById("butt").disabled = false;
          document.getElementById("texts").innerHTML = "";
        }
        
        
    
  }