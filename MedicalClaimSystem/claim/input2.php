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

		$hn=$_POST['Hospital_Name'];
		$rc=$_POST['Room_Category'];
		$h=$_POST['Hospitalization'];
		$doi=$_POST['DOI'];
		$doa=$_POST['DOA'];
		$dod=$_POST['DOD'];
		$i=$_POST['Injury'];
		
		
		$query="insert into hospital_details(Hospital_name,Room_category,Hospitalization_due,DOI,DOA,DOD,Injury_cause,Customer_Num) values('$hn','$rc','$h','$doi','$doa','$dod','$i','$Customer_Num')";
		mysqli_query($conn,$query) or die($query."Can't Connect to Query...");
?>