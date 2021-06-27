<?php

//bring slider values
  
$Motor1= $_POST["motor1"];
$Motor2= $_POST["motor2"];
$Motor3= $_POST["motor3"];
$Motor4= $_POST["motor4"];
$Motor5= $_POST["motor5"];
$Motor6= $_POST["motor6"];
$Turnon= $_POST["on"];







// create connection
$conn = new mysqli("localhost","root","","Project1");

   
    
// create the query statment 
$stat = $conn->prepare("insert into motor_moves (motor1, motor2, motor3, motor4, motor5, motor6,turn_on) values (?, ?, ?, ?, ?, ?,?)");
// define the type 
$stat->bind_param("iiiiiii",$Motor1,$Motor2,$Motor3,$Motor4,$Motor4,$Motor6,$Turnon);
// execute the query
$stat->execute();
echo"data entered ";
    

// close the statment and the connection
$stat->close();
$conn->close(); 

?>

