<?php    
    
include "../connection.php"; 
     
    
$sql = "select * from claim";    
$result = mysqli_query($conn,$sql);    
?>    
<html>    
    <body>      
		<link href = "registration.css" type = "text/css" rel = "stylesheet" />    
		<link href = "../style.css" type = "text/css" rel = "stylesheet" /> 
		
		<ul>
			<li style="float:right;"><a href="../user.php"> Back to homepage</a></li>
		</ul>

		<h1><center>Claims Status</center></h1>
	
		<table width = "100%" border = "1" cellspacing = "1" cellpadding = "1">    
            <tr>    
                   
                <td>Claim No</td>  
				<td>Claim id</td>
				<td>Claim Date</td>   
                <td>Claim Type</td> 
				<td>Claim Statment </td>
                <td colspan = "2">Status</td>    
            </tr>  
	<?php    
    
		while($row = mysqli_fetch_object($result)){    
    
    
	?>  
			<tr>
			    <td>  
					<?php echo $row->claim_no?>  
				</td>
				<td>  
					<?php echo $row->claim_id;?>  
				</td>  
				<td>  
					<?php echo $row->claim_date;?>  
				</td> 
				  
				<td>  
					<?php echo $row->claim_type;?>  
				</td>  	
				<td>  
					<a href="../user_claim_info.php?Customer_Num=<?php echo $row->Customer_Num;?>">Policy </a>
				</td>
		
				<td> 
				<?php echo $row->status;?>
				</td> 
			</tr>  
		<?php } ?>  			
        </table>   		
    </body>    
</html>