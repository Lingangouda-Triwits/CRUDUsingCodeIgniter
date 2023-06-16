<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            padding: 20px;
        }

        h2 {
            color: #333;
            text-align: center;
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 20px;
        }

        .container a {
            display: inline-block;
            padding: 10px 20px;
            margin-bottom: 10px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .container a:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h2>Welcome to the Home Page</h2>
    <div class="container">
        <a href="<?php echo base_url('index.php/RegController/index'); ?>">Register</a>
        <a href="<?php echo base_url('index.php/LoginController/index'); ?>">Login</a>
        <a href="<?php echo base_url('index.php/AllUsersController/index'); ?>">View All Users</a>
    </div>
</body>
</html>
