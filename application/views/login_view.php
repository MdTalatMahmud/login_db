<!DOCTYPE html>  
<html lang="en">  
<head>  
    <meta charset="utf-8">  
    <title>Login Page</title>  

<link rel="stylesheet" type="text/css" href="CSS/style.css"> 
<body >  
   <CENTER> </CENTER>  
      <div class="loginbox">
      <img src="CSS/patient.png" class="avatar">  <h1>Login Here</h1>
    <?php  
  
    echo form_open('Main/login_action');  
  
    echo validation_errors();  
     
    echo "<p>Email: ";  
    echo form_input('email', $this->input->post('email'));  
    echo "</p>"; 
  
    echo "<p>Password: ";  
    echo form_password('password');  
    echo "</p>";  
  
    echo "</p>";  
    echo form_submit('login_submit', 'Login');  
    echo "</p>";  
  
    echo form_close();  
  
    ?>  
  
    <a href='<?php echo base_url()."499_project"; ?>'>Sign  up</a>     
</div>
</body>  
</head> 
</html>  
