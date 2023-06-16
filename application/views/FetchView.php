<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Data</title>
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
            justify-content: center;
        }

        table {
            border-collapse: collapse;
            margin-top: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        table td,
        table th {
            padding: 10px;
            border: 1px solid #ccc;
        }

        table th {
            background-color: #f0f0f0;
            text-align: left;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>User Profile</h2>
    </div>
    <div class="container">
        <table>
            <tr>
                <th>Name</th>
                <td><?php echo $this->session->userdata('user')['name']; ?></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><?php echo $this->session->userdata('user')['email']; ?></td>
            </tr>
            <tr>
                <th>Phone</th>
                <td><?php echo $this->session->userdata('user')['phone']; ?></td>
            </tr>
            <tr>
                <th>Password</th>
                <td><?php echo $this->session->userdata('user')['password']; ?></td>
            </tr>
            <tr>
                <th>File</th>
                <td><img src="<?php echo base_url('uploads/' .$this->session->userdata('user')['file_path']);?>" width="200" height="100"> 
                </td>
            </tr>
        </table>
    </div>
</body>
</html>
