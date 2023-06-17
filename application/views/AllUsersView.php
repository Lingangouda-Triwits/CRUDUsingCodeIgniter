<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Users</title>
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
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

    .table-container {
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
    <h2>All Registered Users</h2>



    <table class="table" id="myTable">
      <thead>
        <tr>
          <th>Sl.No.</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Password</th>
            <th>File</th>
            <th>Created_On</th>

        </tr>
      </thead>
      <tbody>
        <?php $slno = 0;?>
        <?php foreach ($users as $user) { $slno+=1;?>
            <tr>
            <td><?php echo $slno; ?></td>
            <td><?php echo $user['name']; ?></td>
            <td><?php echo $user['email']; ?></td>
            <td><?php echo $user['phone']; ?></td>
            <td><?php echo $user['password']; ?></td>
            <td><?php
                        $file_path = $user['file_path'];
                        if ($file_path) {
                            $file_url = base_url('uploads/' . $file_path);
                            echo '<a href="' . $file_url . '" target="_blank">'.$file_path.'</a>';
                        } else {
                                echo 'No file uploaded.';
                            }
                    ?></td>
            <td><?php echo $user['CreateAt']; ?></td>

            </tr>


        <?php } ?>

      </tbody>
    </table>


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
  <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
  <script>
    $(document).ready(function () {
      $('#myTable').DataTable();

    });
  </script>
</body>
</html>
