
  
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

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
        #password{
          width: 64%;
        }

        /* button {
            padding: 10px 20px;
            background-color: antiquewhite;
            border: none;
            cursor: pointer;
            border-top-right-radius: 10px;
            border-top-left-radius: 10px;
            font-family: 'Inconsolata', monospace;
            font-size: 1.2rem;
            position: relative;
            top:22px;
            left: 40px;
        } */

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
        <h2>Welcome to Registration Page</h2>
        <?php 
  echo @$message;
   ?>

        <form action="<?php echo site_url('RegController/index'); ?>" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="fullname">Enter Your Full Name:</label>
                <input type="text" id="fullname" name="name" required>
            </div>

            <div class="form-group">
                <label for="email">Enter Your Email:</label>
                <input type="email" id="email" name="email" pattern="[^@\s]+@[^@\s]+\.[^@\s]+" title="invalid email format" required>
            </div>

            <div class="form-group">
                <label for="mobile">Enter Mobile Number:</label>
                <input type="tel" id="mobile" name="phone" maxlength="10" pattern="^[6-9][0-9]*$" required oninput="if(!this.value.match('^[6-9][0-9]*$'))this.value='';">
            </div>

            <div class="form-group">
                <label for="password">Enter Your Password:</label>
                <input type="password" id="password" name="password" required>
                <i class="far fa-eye" id="togglePassword"></i>
            </div>

            <div class="form-group">
                <label for="password">Enter Your Password:</label>
                <input type="password" id="confirmPassword" name="confirmPassword" required>
                <i class="far fa-eye" id="togglePassword1"></i>
            </div>

            <div class="form-group">
                <label for="email">Upload your file:</label>
                <input type="file" id="file" name="file" required>
            </div>

            <!-- <button type="submit" name="register" >Register</button> -->
    <input type="submit" style="cursor:pointer;" name="register" class="btn btn-success" value="Register"/>


            <span>Already have an account<a href="<?php echo base_url('index.php/LoginController/');?>">Login</a></span>


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

      var confirmPassword = document.getElementById("confirmPassword");
        const togglePassword1 = document.querySelector('#togglePassword1');

        togglePassword1.addEventListener('click', function(e) {
            const type = confirmPassword.getAttribute('type') === 'password' ? 'text' : 'password';
            confirmPassword.setAttribute('type', type);
            this.classList.toggle('fa-eye-slash');
        });

        //password validation
        var password = document.getElementById("password"),
            confirmPassword = document.getElementById("confirmPassword");

        function validatePassword() {
            if (password.value != confirmPassword.value) {
                confirmPassword.setCustomValidity("Passwords Don't Match");
            } else {
                confirmPassword.setCustomValidity("");
            }
        }
        password.onchange = validatePassword;
        confirmPassword.onkeyup = validatePassword;
    </script>


</body>

</html> 
