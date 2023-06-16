<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
</head>
<body>
    <h2>Welcome to the Home Page</h2>
    <div>
        <a href="<?php echo base_url('index.php/RegisterController'); ?>">Register</a>
    </div>
    <div>
        <a href="<?php echo base_url('index.php/LoginController'); ?>">Login</a>
    </div>
    <div>
        <a href="<?php echo base_url('index.php/UserController/showRegisteredUsers'); ?>">View All Users</a>
    </div>
</body>
</html>
