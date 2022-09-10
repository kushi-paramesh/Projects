<?php

include('database.php');


if(isset($_GET['edit'])){

    $tracking_id= $_GET['edit'];
  $editData= edit_data($connection, $tracking_id);
}

if(isset($_POST['update']) && isset($_GET['edit'])){

  $tracking_id= $_GET['edit'];
    update_data($connection,$tracking_id);
    
    
} 
function edit_data($connection, $tracking_id)
{
 $query= "SELECT * FROM user WHERE tracking_id= $tracking_id";
 $exec = mysqli_query($connection, $query);
 $row= mysqli_fetch_assoc($exec);
 return $row;
}


function update_data($connection, $tracking_id){

    $username= legal_input($_POST['username']);
      $address= legal_input($_POST['address']);
      $address_to_be_delivered = legal_input($_POST['address_to_be_delivered']);

      $query="UPDATE user
            SET username='$username',
                address='$address',
                address_to_be_delivered= '$address_to_be_delivered' WHERE tracking_id=$tracking_id";

      $exec= mysqli_query($connection,$query);
  
      if($exec){
         header('location:user-table.php');
      
      }else{
         $msg= "Error: " . $query . "<br>" . mysqli_error($connection);
         echo $msg;  
      }
}


function legal_input($value) {
  $value = trim($value);
  $value = stripslashes($value);
  $value = htmlspecialchars($value);
  return $value;
}
?>