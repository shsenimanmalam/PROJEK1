<html>
<head>
<meta charset="utf-8">
<title>LOGIN</title>
        <link rel="stylesheet" href="<?php echo base_url();?>assets/style.css">
</head>
<body>
  <div class="form">
      <div class="form-toggle"></div>
          <div class="form-panel one">
              <div class="form-header">
                  <h1 style="color: darkgreen">SILAHKAN LOGIN</h1>
              </div>
              <div class="form-content">

              <form action="<?php echo base_url();?>index.php/login/aksilogin" method="post">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" required="required"/>
                </div>

                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" id="password" name="password" required="required"/>
                </div>
               
                <div class="form-group">
                  <label class="form-remember">
                  <input type="checkbox"/>Ingat Saya</label>
                </div>
                
                <div class="form-group">
                  <button type="submit" value="login">Login</button>
                </div>           
              </form>
              </div>
          </div>
  </div>

</body>
</html>