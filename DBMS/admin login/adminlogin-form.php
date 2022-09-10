
  <!DOCTYPE html>
  <html>
  
  <head>
    <title>SIGN-IN</title>
    <link rel="stylesheet" href="adminloginstyle.css">
  </head>
  <body>
  <div id="frm">
    <div id="card">
      <div id="card-content">
        <div id="card-title">
          <h2>LOGIN</h2>
          
        </div>
        <form method="POST" class="form" action="phpstuff.php">
          <label for="user-email" style="padding-top:13px">
              &nbsp;Username
            </label>
          <input id="user" class="form-content" type="text" name="user" autocomplete="on" required />
          <div class="form-border"></div>
          <label for="user-password" style="padding-top:22px">
              &nbsp;Password
            </label>
          <input id="pass" class="form-content" type="password" name="pass" required />
          <div class="form-border"></div>
          
          <input id="btn" type="submit" name="submit" value="LOGIN" />
        </form>
      </div>
    </div>
  </body>
  
  
  </html>