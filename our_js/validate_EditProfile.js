function validateForm() 
{
  	var x = document.forms["myform"]["name"].value;
    var y =document.forms["myform"]["age"].value;
    var z=document.forms["myform"]["weight"].value;
    var w=document.forms["myform"]["height"].value;
    var type= document.forms["myform"]["Gender"].value;



    if (x == "" || y=="" || z=="" || w=="")  
    {
        alert("Please fill all fields");
      
       reset();
        return false;
    }



    if (x.length < 3)
    {
    	alert("The name must be at least 5 characters ..");
    	
       
       reset();
       return false;
    }

    if( w < 120)
    {
    	alert("Sorry, your Height is below 120");
    	
      
       reset();
       return false;
    }

    if( z < 10)
    {
    	alert("Sorry, your Weight is below 10");
    	
      
       reset();
       return false;
    }
    

    alert("Hello "+ x +"\n"+"You are succesfully edited your profile ");

    
   
}




function reset()
{
	 document.forms["myform"]["name"].value="";
  	 document.forms["myform"]["age"].value="";
     document.forms["myform"]["weight"].value="";
     document.forms["myform"]["height"].value="";
     document.forms["myform"]["Gender"].checked=false;


	   
    	return true;

}