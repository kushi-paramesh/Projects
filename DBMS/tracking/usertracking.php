<?php
$servername="localhost";
$username="root";
$password="";
$dbname="courier";
$link=mysqli_connect($servername,$username,$password,$dbname);
$con=mysqli_select_db($link,$dbname);

if($con)
{

}
else
{
    die("connection failed because".mysqli_connect_error());
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TRACKING</title>
</head>
<body>
    <form name="form1" action="" method="post"> 
        <table>
        <tr>
                <td>tracking id</td>
                <td><input type="text" name="tracking_id"></td>
            </tr>
            <tr>
                <td>username</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>current address</td>
                <td><input type="text" name="current_address"></td>
            </tr>
            <tr>
                <td>address to be delivered</td>
                <td><input type="text" name="address_to_be_delivered"></td>
            </tr>
            <tr>
                <td>status</td>
                <td><input type="text" name="status"></td>
            </tr>
            
            <td colspan="2" allign="center">
              
                <input type="submit" name="submit5" value="search">
            </td>
            </tr>
            </table>
            </form>
</body>
</html>

<?php




if(isset($_POST["submit5"]))
{
   $res=mysqli_query($link,"select * from tracking where tracking_id='$_POST[tracking_id]'");
   echo"<table border=1>";
   echo"<tr>";
   echo"<th>"; echo"tracking_id"; echo"</th>";
   echo"<th>"; echo"current_address"; echo"</th>";
   echo"<th>"; echo"address_to_be_delivered"; echo"</th>";
   echo"<th>"; echo"status"; echo"</th>";
   echo"</tr>";
while($row=mysqli_fetch_array($res))
{
echo"<tr>";
echo"<td>"; echo $row["tracking_id"]; echo"</td>";
echo"<td>"; echo $row["current_address"]; echo"</td>"; 
echo"<td>"; echo $row["address_to_be_delivered"]; echo"</td>"; 
echo"<td>"; echo $row["status"]; echo"</td>"; 
echo"</tr>";
}
echo"</table>";
}