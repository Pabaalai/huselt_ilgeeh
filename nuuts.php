<?php
$servername = "localhost";
$username = "root";	
$password = "";
$dbname = "...";

 $title = $_POST['title'];
$seo = $_POST['seo'];
$content = $_POST['content'];
$category = $_POST['category'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// // Check connection
// if ($conn->connect_error) {
//die("Connection failed: " . $conn->connect_error);}

//20 shirheg davhar yom hiih bol iim yom hiine 

//for($i=0; $i<20 ; $i++){
$sql = "INSERT INTO post(title,seo_title, content,author) VALUES('$title','$seo','$content','$category')";

 if ($conn->query($sql) === TRUE) {
   echo "New record created successfully";
 } else {
   echo "Error: " . $sql . "<br>" . $conn->error;
 }
//}

$conn->close();
    

    

?>

