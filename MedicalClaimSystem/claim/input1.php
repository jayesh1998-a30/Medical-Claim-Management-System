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



        $sql = "select * from user_policy";   
		$result = mysqli_query($conn,$sql);
		$row = mysqli_fetch_object($result);



		


		$fn=$_POST['First_Name'];
		$mn=$_POST['Middle_Name'];
		$d=$_POST['DOB'];
		$ln=$_POST['Last_Name'];
		$g=$_POST['Gender'];
		$a=$_POST['Address'];
		$p=$_POST['Pincode'];
		$con=$_POST['Contact_Number'];
		$mon=$_POST['Mother_Name'];
		$mos=$_POST['Mother_Status'];
		$fan=$_POST['Father_Name'];
		$fas=$_POST['Father_Status'];
		$ms=$_POST['Marital_Status'];


		

	
		$query="insert into personal_details(First_Name,Middle_Name,Last_Name,Gender,DOB,Address,Pincode,Contact_Number, Mother_Name, Mother_Status,Father_Name, Father_Status, Marital_Status,Customer_Num) values('$fn','$mn','$ln','$g','$d','$a','$p','$con','$mon','$mos','$fan','$fas','$ms','$Customer_Num')";
		mysqli_query($conn,$query) or die($query."Can't Connect to Query...");
?>