<?php
if(isset($_POST['submit'])){
   $fullname = isset($_POST['fullname']);
    // echo "name added";
    include 'ass.php';
    mysqli_query($dbname,  "INSERT INTO employees (fullname) VALUES (1)");
    // if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        // } else {
        // echo "Error: " . $sql . "<br>" . $conn->error;
        }
// }
?>