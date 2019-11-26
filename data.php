<?php 

//GET ALL DATA -> array ($publications)

require_once 'classes.php';

$publications = array();

//connect to database
$con = mysqli_connect("localhost", "root", "", "testsite");
if(mysqli_connect_errno()){
    echo "Failed to connect to  MYSQL: " . mysqli_connect_error();
}
//make query
$result = mysqli_query($con, "SELECT * FROM publication");

//work with results
while($row = mysqli_fetch_array($result)){
    $publications[] = new $row['type']($row);
}
