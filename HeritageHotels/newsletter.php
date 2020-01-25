<?php
$email = filter_input(INPUT_POST,'email');
/*//$usercard = filter_input(INPUT_POST,'usercard');
$email = filter_input(INPUT_POST,'email');
//$cardnumber = filter_input(INPUT_POST,'cardnumber');
$country = filter_input(INPUT_POST,'country');
$code = filter_input(INPUT_POST,'code');
$phone = filter_input(INPUT_POST,'phone');
$adult = filter_input(INPUT_POST,'adult');
$child = filter_input(INPUT_POST,'child');
$comment = filter_input(INPUT_POST,'comment');
//$room = filter_input(INPUT_POST,'room');
$checkin = filter_input(INPUT_POST,'cin');
$checkout = filter_input(INPUT_POST,'cout');
*/if(!empty($username))
{
	$host = "localhost";
	$dbusername = "root";
	$dbpassword = "";
	$dbname = "enquiry";
	
	$conn = new mysqli ($host,$dbusername,$dbpassword,$dbname);
	if(mysqli_connect_error())
	{
		die('connect Error('. mysqli_connect_error().')'.mysqli_connect_error());
	}
	else
	{
		$sql = "INSERT INTO newsletter (email)
		values ('$email')";
		
		
		if($conn->query($sql)){
			
		echo "";
		}
		else
		{
			echo "Error: ".$sql."<br>". $conn->error;
		}*/
		$conn->close();
	}
	
}
else{
	echo "Email Required";
}
?>