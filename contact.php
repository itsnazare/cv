<?php
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $query = "INSERT INTO `visitordetails`(`name`, `email`, `message`) VALUES ('".$name."','".$email."','".$message."')";

        $con = mysqli_connect('localhost','root','','portfolio') or die ("Unable to connect");

        $result = mysqli_query($con, $query);
        if($result){
            echo "data saved successfully";
        }
    }
?>