<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Data</title>
</head>
<body>
  
    <h2>User Profile</h2>
    <table>
        <tr>
            <td>Name:</td>
            <td><?php echo $res['name']; ?></td>
        </tr>
        <tr>
            <td>Email:</td>
            <td><?php echo $res['email']; ?></td>
        </tr>
        <tr>
            <td>Phone:</td>
            <td><?php echo $res['phone']; ?></td>
        </tr>
        <tr>
          <td>Password:</td>
          <td><?php echo $res['password']; ?></td>
      </tr>
      <tr>
        <td>File:</td>
        <td><?php echo $res['file_path']; ?></td>
    </tr>
    </table>
</body>
</html>
