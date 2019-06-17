<?php

if(isset($_POST['btn_update'])){
    $received_id = $_POST['x'];
    $received_name = $_POST['y'];
    $received_email = $_POST['z'];
    $received_pass = $_POST['pwd'];

    //connect to the database

    $conn = mysqli_connect("localhost","root","","may-syst");
    //check if the connections successful
    if(!$conn){
        echo "Connection Failed";
    }else{
        //proceed to update the database
        //start by creating the update query
        $updateQuery = "UPDATE wanafunzi SET name='$received_name',email='$received_email',password='$received_pass' WHERE
        id='$received_id'";
        //check if the query is correct
        if(!$updateQuery){
            echo "Error on the update query";
        }else{
            //proceed to update query
            $update = mysqli_query($conn,$updateQuery);
            //check if the update was successful
            if(!$update){
                echo "Updating failed";
            }else{
                echo "Record Updated successfully";
                header("Location: viewUsers.php");
            }
        }


    }
}