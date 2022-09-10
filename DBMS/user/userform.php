

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="user.css">
    <title> USER FORM</title>
</head>
<body>
    <div class="container">
        <div class="title">COURIER ORDER </div>
            <form action="userconnection.php" method="POST">
                <div class="staff-details">
                    <div class ="input-box">
                        <span class="details">Username:</span>
                        <input type="text" placeholder="enter your name" name="username"required>
                    </div>
                    <div class ="input-box">
                        <span class="detils">Address:</span>
                        <input type="text" placeholder="enter the address" name="address"required>
                    </div>
                    <div class ="input-box">
                        <span class="detils">Address To Be Delivered :</span>
                        <input type="text" placeholder="enter the address to be delivered" name="address_to_be_delivered"required>
                    </div>
                    <div class="button">
                    <input type="submit" name="submit">
                    </div> 
                </div>
            </form>
        </div>
    </div>
  
   
     
    
</body>
</html>