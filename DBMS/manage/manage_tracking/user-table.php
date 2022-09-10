<?php

include('read-script.php');
?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title> user </title>
<link rel="stylesheet" href="managestyle.css">
</head>
<body>


<div class="table-data">
        <div class="list-title">
 <h2>Order list</h2>
          
            </div>

    <table border="1">

        <tr>

            <th>tracking_id</th>
            <th>username</th>
            <th>address</th>
            <th>address_to_be_delivered</th>
            <th>Edit</th>
            <th>Delete</th>


        </tr>
        
<?php

        if(count($fetchData)>0){
        $sn=1;
        foreach($fetchData as $data){
            
?> <tr>
<td><?php echo $sn; ?></td>
<td><?php echo $data['username']; ?></td>
<td><?php echo $data['address'];?> </td>
<td><?php echo $data['address_to_be_delivered']; ?></td>
<td><a href="update-form.php?edit=<?php echo $data['tracking_id']; ?>">Edit</a></td>
<td><a href="delete-script.php?delete=<?php echo $data['tracking_id']; ?>">Delete</a></td>
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