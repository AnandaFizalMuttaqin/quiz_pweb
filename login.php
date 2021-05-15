<!DOCTYPE html>
<html>
    <title>Halaman Login</title>
<head>
    <link href="css/login.css" rel="stylesheet" media="screen"> 
</head>
<body>
<hr> <br><br>
<div class="login-form">
<h1>LOGIN PAGE</h1>
    <form method="post" action="index.php">
        <div class="form-group "> <input type="text" class="form-control" name="username" placeholder="Username"></div> <br>
        
        <div class="form-group log-status"> <input type="password" class="form-control" name="password" placeholder="Password"> <br><br> 

        <button type="submit" class="log-btn">Login</button>
    </form>
</div>
</body>
<div class="popup">
    <?php
    if(isset($_COOKIE["message"])){ 
    echo $_COOKIE["message"];   
    }
    ?>
</div>
</html>


