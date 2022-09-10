<?php

include('read-script.php');
?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Manage Staff</title>
<link rel="stylesheet" href="managestyle.css">
</head>
<body>


<div class="table-data">
        <div class="list-title">
 <h2>Manage Staff</h2>
          
            </div>

    <table border="1">

        <tr>

            <th>id</th>
            <th>staff_name</th>
            <th>phone_no</th>
            <th>address</th>
            <th>Edit</th>
            <th>Delete</th>


        </tr>
        
<?php

        if(count($fetchData)>0){
        $sn=1;
        foreach($fetchData as $data){
            
?> <tr>
<td><?php echo $sn; ?></td>
<td><?php echo $data['staff_name']; ?></td>
<td><?php echo $data['phone_no'];?> </td>
<td><?php echo $data['address']; ?></td>
<td><a href="update-form.php?edit=<?php echo $data['id']; ?>">Edit</a></td>
<td><a href="delete-script.php?delete=<?php echo $data['id']; ?>">Delete</a></td>
</tr> <?php

      $sn++; }

      }else{
            
?>

      <tr>
        <td colspan="7">No Data Found</td>
      </tr>
                
<?php

    }
?>
 
    </table>
    </div>

</body>
</html>