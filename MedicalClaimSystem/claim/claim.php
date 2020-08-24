<html>    
    <head>    
        <title>Claim</title>    
    </head>    
    <body>    
        <link href = "registration.css" type = "text/css" rel = "stylesheet" />
		<link href = "../style.css" type = "text/css" rel = "stylesheet" /> 	
		<ul>
			<li style="float:right;"><a href="../user.php"> Back to homepage</a></li>
		</ul>
        <h2>Claim</h2>    
        <form name = "form1" action='user_policy_detail.php' method = 'POST' enctype = "multipart/form-data" >    
			<div class = "container">



				<div class = "form_group">    
                    <label>EnterPolicy Number:</label>    
                    <input type = "text" name = "pol" value = ""/>
					<h6><label>Enter 9 digit number</label></h6>
                </div>
 
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