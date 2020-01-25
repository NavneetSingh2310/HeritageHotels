<?php
$username = filter_input(INPUT_POST,'name');
//$usercard = filter_input(INPUT_POST,'usercard');
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
if(!empty($username)|| !empty($email) || !empty($country) || !empty($code) || !empty($phone) || !empty($adult)||!empty($checkin) || !empty($checkout) )
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
		 $sql = "INSERT INTO enquirytable2 (name,email,country_of_residence,code,phone,no_of_children,no_of_adults,checkin,checkout,queries)
		values ('$username','$email','$country',$code,$phone,$child,$adult,'$checkin','$checkout','$comment')";
			
		
		
		if($conn->query($sql)){
			
		echo "Sent Successfully";
		}
		else
		{
			echo "Error: ".$sql."<br>". $conn->error;
		}
		$conn->close();
	}
	
}
else{
	echo "All Fields Are Required";
}
?>

<html>
<head>
  <link rel="stylesheet" href="styleenquiry.css" />
</head>
<body><br><br><div style="text-align:center"><a href="home.html">
<button id="topbtn" style="width:40%; height:5%">Home</button></a></div>
</body>
</html>