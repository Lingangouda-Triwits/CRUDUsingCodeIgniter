<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/fontawesome.min.js"></script>


    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: antiquewhite;
        }

        .container {
            width: 90%;
            max-width: 500px;
            height: auto;
            background-color: azure;
            border: 2px solid azure;
            border-radius: 10px;
            font-family: 'Inconsolata', monospace;
            padding: 20px;
        }

        .form-group {
            position: relative;
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }

        .form-group label {
            font-size: 1rem;
            width: 50%;
        }

        input,
        select,
        textarea {
            font-size: 1.2rem;
            width: 70%;
            height: 40px;
            padding: 5px;
            margin-left: 5px;
            border: none;
            background-color: antiquewhite;
            border-radius: 10px;
            font-family: 'Inconsolata', monospace;
            display: inline-block;
            box-sizing: border-box;
        }
        
        input[type="password"] {
            padding-right: 30px;
        }

        #togglePassword {
            position: absolute;
            right: 10px;
            cursor: pointer;
        }

        button:hover {
            background-color: azure;
            transition: 1s;
        }

        @media only screen and (min-width: 576px) {
            .container {
                width: 80%;
            }
        }

        @media only screen and (min-width: 768px) {
            .container {
                width: 60%;
            }
        }

        @media only screen and (min-width: 992px) {
            .container {
                width: 40%;
            }
        }
        h2{
            margin-bottom: 20px;
            font-style: italic;
            text-decoration: underline;
        }
        span{
            margin-left: 100px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Login Form</h2>
        <?php echo @$message; ?>
        <form method="post" enctype="multipart/formdata">
            <div class="form-group">
                <label for="email">Enter Your Email Id:</label>
                <input type="email" id="email" name="username" pattern="[^@\s]+@[^@\s]+\.[^@\s]+" title="invalid email format" required>
            </div>

            <div class="form-group">
                <label for="password">Enter Your Password:</label>
                <input type="password" id="password" name="password" required>
                <i class="far fa-eye" id="togglePassword"></i>
            </div>

            <input type="submit" name="login" class="btn btn-success" value="Login"/>
            <span>Don't have an account<a href="<?php echo base_url('RegController/index');?>">Register</a></span>

        </form>
    </div>
    <script>
        // To hide and unhide the passwords
        var password = document.getElementById("password");
        const togglePassword = document.querySelector('#togglePassword');

        togglePassword.addEventListener('click', function(e) {
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            this.classList.toggle('fa-eye-slash');
        });
    </script>
</body>

</html>
