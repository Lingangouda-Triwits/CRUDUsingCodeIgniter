 
<?php
class RegModel extends CI_Model {
    function insert_data($name, $email, $phone, $password, $filePath) {
        $query = $this->db->query("SELECT * FROM user WHERE (email = '".$email."' OR phone = '".$phone."')");
        $row = $query->num_rows();

        if ($row) {
            $data['message'] = "<h3 style='color:red'>This user is already registered</h3>";
        } else {
            $query = $this->db->query("INSERT INTO user SET name = '$name', email = '$email', phone = '$phone', password = '$password', file_path = '$filePath'");

            $data['message'] = "<h3 style='color:blue'>You are registered successfully</h3>";
        }

        return $data; // Return the data instead of loading the view
    }
}


?>