<?php
   $firstname = $_POST['firstname'];
   $lastname=$_POST['lastname'];
   $gender=$_POST['gender'];
   $email=$_POST['email'];
   $password=$_POST['password'];
   $number=$_POST['number'];

   $conn=new mysqli('localhost','root','','registration');
   if ($conn->connect_error)
   {
	echo "$conn->connect_error";
	die ("connection failed:".$conn->connect_error);
   }
    else {
    $stmt=$conn->prepare("insert into growing( firstname, lastname, gender, email, password, number)values(?,?,?,?,?,?)");
    $stmt->bind_param("sssssi", $firstname, $lastname, $gender, $email, $password, $number);
    $execval=$stmt->execute();
    echo $execval;
    echo"Registration Successful...";
    $stmt->close();
    $conn->close ();
   }
?>