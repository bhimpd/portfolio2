<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "portfolio");

if (isset($_POST['submit'])) {
    // getting name from another php file
$name = $_POST['fullname'];
$email = $_POST['email'];
$number = $_POST['number'];
$address = $_POST['address'];
$comment = $_POST['comment'];
$gender = $_POST['gender'];

    $query = "INSERT INTO contact (name, email, number, address, comment, gender) 
    VALUES ('$name', '$email', '$number', '$address', '$comment', '$gender')";

    $query_run = mysqli_query($con, $query);
    if ($query_run) {
        // $_SESSION['status'] = "Inserted Successfully";
        // header("Location:checkbox");
        echo "data is added..";
    } 
    else {
        echo "Data Not Inserted Successfully";
       
    }

}

?>