<?php

        include "../connection.php";
		session_start();
		$Policy_Num = $_SESSION['Policy_Num'];  //get session value into variable
		echo $Policy_Num;                       //display session variable
        $_SESSION['Policy_Num'] = $Policy_Num;  //set the session array
        

        $sql="select * from user_policy where Policy_Num ='$Policy_Num'";
        $result = mysqli_query($conn,$sql);   
		$row = mysqli_fetch_object($result);
        $User_id=$row->User_id;
        $Customer_Num=$row->Customer_Num;
        $Policy_Type=$row->Policy_type;
	
        echo $Customer_Num;
        echo $User_id;
        echo $Policy_Type = 'Medical Claim';

        $query="select * from claim_detail where Customer_Num = '$Customer_Num'";
        $result1 = mysqli_query($conn,$query);   
        $row1 = mysqli_fetch_object($result1);
        $claim_id=$row1->claim_id;
    
        echo $claim_id;

        $query1="insert into claim(claim_id,Customer_Num,User_id,claim_type) values('$claim_id','$Customer_Num','$User_id','$Policy_Type')";
	    mysqli_query($conn,$query1) or die($query1."Can't Connect to Query...");
        //header('Location:claim_status.php');

?>
