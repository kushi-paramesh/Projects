<?php

include('database.php');


if(isset($_GET['edit'])){

    $id= $_GET['edit'];
  $editData= edit_data($connection, $id);
}

if(isset($_POST['update']) && isset($_GET['edit'])){

  $id= $_GET['edit'];
    update_data($connection,$id);
    
    
} 
function edit_data($connection, $id)
{
 $query= "SELECT * FROM staff WHERE id= $id";
 $exec = mysqli_query($connection, $query);
 $row= mysqli_fetch_assoc($exec);
 return $row;
}


function update_data($connection, $id){

    $staff_name= legal_input($_POST['staff_name']);
      $phone_no= legal_input($_POST['phone_no']);
      $address = legal_input($_POST['address']);

      $query="UPDATE staff
            SET staff_name='$staff_name',
                phone_no='$phone_no',
                address= '$address' WHERE id=$id";

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