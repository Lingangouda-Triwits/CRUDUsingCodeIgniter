<?php
class LoginModel extends CI_Model
{
    public function check_data($username, $password)
    {
        $query = $this->db->query("SELECT * FROM user WHERE email = '$username'");
        $row = $query->num_rows();

        if ($row) {
            $res = $query->row_array();
            $email = $res['email'];

            $query = $this->db->query("SELECT * FROM user WHERE email = '$username' AND password = '$password'");
            $row1 = $query->num_rows();

            if ($row1) {
                $data['user'] = $res; // Store the user data in the $data array

                // Set the user data in session
                $this->session->set_userdata('user', $data['user']);

                redirect('http://localhost/codeigniter/index.php/LoginController/fetch'); // Redirect to the FetchView
            } else {
                $data['message'] = "<h3 style='color:red'>Password is not correct.</h3>";
                $this->load->view('LoginView', $data);
            }
        } else {
            $data['message'] = "<h3 style='color:red'>This user is not registered</h3>";
            $this->load->view('LoginView', $data);
        }
    }
}
?>
