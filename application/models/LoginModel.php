<?php
class LoginModel extends CI_Model
{
    function check_data($username, $password)
    {
        $query = $this->db->query("SELECT * FROM user WHERE email = '$username'");
        $row = $query->num_rows();

        if ($row) {
            // $res = $query->row_array();
            // $email = $res['email'];

            $query = $this->db->query("SELECT * FROM user WHERE email = '$username' AND password = '$password'");
            $row1 = $query->num_rows();

            if ($row1) {
                redirect('http://localhost/codeigniter/index.php/LoginController/welcome');
            } else {
                $data['message'] = "<h3 style='color:red'>Password is not correct.</h3>";
                $this->load->view('LoginView', @$data);
            }
        } else {
            $data['message'] = "<h3 style='color:red'>This user is not registered</h3>";
            $this->load->view('LoginView', @$data);
        }
    }
}

?>