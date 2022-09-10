<?php

include("database.php");
if(isset($_GET['delete'])){

    $tracking_id= $_GET['delete'];
  delete_data($connection, $tracking_id);

}


function delete_data($connection, $tracking_id){
   
    $query="DELETE from user WHERE tracking_id=$tracking_id";
    $exec= mysqli_query($connection,$query);

    if($exec){
      header('location:user-table.php');
    }else{
        $msg= "Error: " . $query . "<br>" . mysqli_error($connection);
      echo $msg;
    }
}
?>