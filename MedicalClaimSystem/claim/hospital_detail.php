<?php
session_start();
$Policy_Num = $_SESSION['Policy_Num'];  //get session value into variable

$_SESSION['Policy_Num'] = $Policy_Num;  //set the session array
?>


<html>    
    <head>    
        <title>Hospital Details</title>    
    </head>    
    <body>    
        <link href = "reg1.css" type = "text/css" rel = "stylesheet" /> 
		<link href = "../style.css" type = "text/css" rel = "stylesheet" /> 	
		<ul>
			<li style="float:right;"><a href="../user.php"> Back to homepage</a></li>
		</ul>
		<h2>Hospital Details</h2>    
        <form name = "form1" action='show2.php' method = 'POST' enctype = "multipart/form-data" >    
            <div class = "container">


            

                <div class = "form_group">    
                    <label>Hospital Name:</label>    
                    <input type = "text" name = "Hospital_Name" value = "" required />    
                </div> 

                <div class = "form_group">    
                    <label>Room category:</label>
                    <input type = "radio" name = "Room_Category" value = "Day_care" required />Day Care	    
                    <input type = "radio" name = "Room_Category" value = "Single_occupy" required />Single Occupy
                    <input type = "radio" name = "Room_Category" value = "Twin_sharing" required />Twin Sharing  
                </div> 


                <div class = "form_group">    
                    <label>Hospitalization Due: </label>    
                    <input type = "radio" name = "Hospitalization" value = "Injury" required />Injury	    
                    <input type = "radio" name = "Hospitalization" value = "Illness" required />Illness
                    <input type = "radio" name = "Hospitalization" value = "Maternity" required />Maternity  
                </div> 


                <div class = "form_group">    
                    <label>Date of Injury:</label>    
                    <input type = "date" name = "DOI" value = "" required />    
                </div> 


                <div class = "form_group">    
                    <label>Date of Admission:</label>    
                    <input type = "date" name = "DOA" value = "" required />    
                </div> 


                <div class = "form_group">    
                    <label>Date of Discharge:</label>    
                    <input type = "date" name = "DOD" value = "" required />    
                </div>


                <div class = "form_group">    
                    <label>If injury given cause: </label>    
                    <input type = "radio" name = "Injury" value = "Self_inflicted" required />self inflicted	    
                    <input type = "radio" name = "Injury" value = "Road_accident" required />Road Traffic Accident
                    <input type = "radio" name = "Injury" value = "Alcohal_consumptio" required />Alcohal Consumption
                </div> 



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