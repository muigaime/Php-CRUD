<?php

if(isset($_GET['btn_save'])){
    $inputedName = $_GET['name'];
    $inputedEmail = $_GET['email'];
    $inputedPassword = $_GET['pwd'];

    //to save data connect to the database
    $conn = mysqli_connect("localhost","root","","may-syst");

    //check if the connection was successfully
    if(!$conn){
        echo "Connection Failed";
    }else{
        //proceed to save data to the database
        //start by creating the insert query

        $insertQuery = "INSERT INTO `wanafunzi`(`name`, `email`, `password`)
                       VALUES ('$inputedName','$inputedEmail','$inputedPassword')";

        if(!$insertQuery){
            echo "Error on Insert Query";
        }else{
           $ingiza = mysqli_query($conn,$insertQuery);

           if(!$ingiza){
               echo "Failed to insert Data";
           }else{
               echo "Data Inserted Successfully";
              // header("Location: saveUser.php");
               header("Location: saveUser.php");

           }
        }
    }
}