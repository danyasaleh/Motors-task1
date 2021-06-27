<?php

// create connection
$conn = new mysqli("localhost","root","","Project1");

   
    
// create the query statment 
$stat =mysqli_query($conn, "SELECT * FROM motor_moves ORDER by id DESC LIMIT 1");
// execute the query
$result = mysqli_fetch_row($stat);
echo $result[0];
echo"\n";
echo $result[1];
echo"\n";
echo $result[2];
echo"\n";
echo $result[3];
echo"\n";
echo $result[4];
echo"\n";
echo $result[5];
echo"\n";
echo $result[6];
echo"\n";
echo $result[7];
echo"\n";


// close the statment and the connection
$stat->close();
$conn->close(); 



?>