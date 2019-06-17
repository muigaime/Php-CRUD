<?php

//connect to the DB
$conn = mysqli_connect("localhost","root","","may-syst");

//check if the connection was successful
if(!$conn){
    echo "Connection failed";
}else{
    //Proceed by deleting
    //start by checking if the delete has been clicked
    if(isset($_GET['id_yangu'])){
        $recived_id = $_GET['id_yangu'];
        // create delete query

        $deleteQuery = "DELETE FROM wanafunzi WHERE id=$recived_id";

        //complete by finally deleting
        $delete = mysqli_query($conn,$deleteQuery);

        //check if deleting was successful
        if(!$delete){
            echo "Deleting Failed";
        }else{
            echo "Record Deleted Successfully";
            header("Location: viewUsers.php");
        }
    }
}