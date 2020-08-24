<?php
		include "../connection.php";
		session_start();
		$Policy_Num = $_SESSION['Policy_Num'];  //get session value into variable
		echo $Policy_Num;                       //display session variable
		$_SESSION['Policy_Num'] = $Policy_Num;  //set the session array

		  
		$query="select Customer_Num from user_policy where Policy_Num = '$Policy_Num'";  
		$result1 = mysqli_query($conn,$query);   
		$row1 = mysqli_fetch_object($result1);
		$row1->Customer_Num;
		$Customer_Num=$row1->Customer_Num;
		echo $Customer_Num;


		$prexp=$_POST['Pre_exp'];
		$posexp=$_POST['Post_exp'];
		$ac=$_POST['Amb_charge'];
		$preh=$_POST['Pre_hosp'];
		$posh=$_POST['Post_hosp'];
		$hc=$_POST['Health_cost'];
		$sc=$_POST['Surgical_cost'];
		
		
		$query="insert into claim_detail(Pre_hospital_expense,Post_hospital_expense,Ambulance_charge,Pre_hospital_period,Post_hospital_period,Health_checkup,Surgical_cost,Customer_Num) values('$prexp','$posexp','$ac','$preh','$posh','$hc','$sc','$Customer_Num')";
	    mysqli_query($conn,$query) or die($query."Can't Connect to Query...");
?>