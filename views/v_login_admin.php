<html>
    <head>
    <meta charset="utf-8">
    <title>LOGIN ADMIN</title>

        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/stylelogin.css">

    </head>
    <!-- Form-->
<div class="form">
  <div class="form-toggle"></div>
    <div class="form-panel one">
      
      <div class="form-header">
        <h1 style="color: darkgreen">LOGIN ADMIN</h1>
      </div>

    <div class="form-content">
      <form action="<?php echo base_url();?>index.php/login_admin/aksilogin" method="post">
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
          <button type="submit">Masuk</button>
        </div>
      </form>

        <br>
        <a href="<?php echo base_url();?>index.php/login_ks">LOGIN KEPALA SEKOLAH</a>
    </div>
  </div>
</div>
</html>