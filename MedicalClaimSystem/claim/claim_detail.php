<?php
session_start();
$Policy_Num = $_SESSION['Policy_Num'];  //get session value into variable
$_SESSION['Policy_Num'] = $Policy_Num;  //set the session array

?>

<html>    
    <head>    
        <title>Details of Claim</title>    
    </head>    
    <body>    
        <link href = "reg1.css" type = "text/css" rel = "stylesheet" />
		<link href = "../style.css" type = "text/css" rel = "stylesheet" /> 
		<ul>
		<li style="float:right;"><a href="../user.php">Back to homepage</a></li>    
		</ul>
		<h2>Claim Detail</h2>    
        <form name = "form1" action='show3.php' method = 'POST' enctype = "multipart/form-data" >    
            <div class = "container">
                
                

				<div class = "form_group">    
                    <label>Pre-hospitalization expense:</label>    
                    <input type = "text" name = "Pre_exp" required/>    
                </div><br>

                <div class = "form_group">    
                    <label>Post-hospitalization expense:</label>    
                    <input type = "text" name = "Post_exp" required/>    
                </div><br>


                <div class = "form_group">    
                    <label>Ambulance charges:</label>    
                    <input type = "text" name = "Amb_charge" value = "" required />    
                </div><br> 


                <div class = "form_group">    
                    <label>Pre-hospitalization period:</label>    
                    <input type = "text" name = "Pre_hosp" value = "" required />    
                </div><br>   

               <div class = "form_group">    
                    <label>Post-hospitalization period:</label>    
                    <input type = "text" name = "Post_hosp" value = "" required />    
                </div><br> 

				<div class = "form_group">    
                    <label>Health check up cost:</label>    
                    <input type = "text" name = "Health_cost" value = "" required />    
                </div><br>

				<div class = "form_group">    
                    <label>Surgical cost: </label>    
                    <input type = "text" name = "Surgical_cost" value = ""  required />    
                </div><br>

                
				
				
				
				<div class = "form_group">    
                    <input type = "submit" value = "submit"/>    
                </div>
				<div class = "form_group">    
                    <input type = "reset" value = "reset"/>    
                </div>
				    
                   
              
            </div>    
        </form>    
    </body>    
</html>    