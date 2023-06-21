<?php
defined('BASEPATH') or exit('No direct script access allowed');

class RegController extends CI_Controller {
    public function index() {
        $data['message'] = ''; // Initialize the message variable

        // Load the database library
        $this->load->database();

        if ($this->input->post('register')) {
            $name = $this->input->post('name');
            $email = $this->input->post('email');
            $phone = $this->input->post('phone');
            $password = $this->input->post('password');

            // File Upload
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $this->load->library('upload', $config);

            // Process file upload for each uploaded file
            $filePaths = array(); // Initialize array to store file paths

            // Check if files were uploaded
            if (!empty($_FILES['file']['name'][0])) {
                // Process each uploaded file
                foreach ($_FILES['file']['name'] as $index => $fileName) {
                    $_FILES['userfile']['name'] = $_FILES['file']['name'][$index];
                    $_FILES['userfile']['type'] = $_FILES['file']['type'][$index];
                    $_FILES['userfile']['tmp_name'] = $_FILES['file']['tmp_name'][$index];
                    $_FILES['userfile']['error'] = $_FILES['file']['error'][$index];
                    $_FILES['userfile']['size'] = $_FILES['file']['size'][$index];

                    if ($this->upload->do_upload('userfile')) {
                        $fileData = $this->upload->data();
                        $filePaths[] = $fileData['file_name'];
                    } else {
                        $data['message'] .= $this->upload->display_errors('<h3 style="color:red">', '</h3>');
                    }
                }
            }

            // Continue with database insertion and other logic

            // Example database insertion
            $this->load->model('RegModel');
            $data['message'] = $this->RegModel->insert_data($name, $email, $phone, $password, $filePaths);
        }

        $this->load->view('RegView', $data); // Pass the $data variable to the view
    }
}
?>


<?php
class RegController extends CI_Controller {
    public function index() {
        $data['message'] = ''; // Initialize the message variable

        if ($this->input->post('register')) {
            $name = $this->input->post('name');
            $email = $this->input->post('email');
            $phone = $this->input->post('phone');
            $password = $this->input->post('password');

            // File Upload
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('file')) {
                $data['message'] = $this->upload->display_errors('<h3 style="color:red">', '</h3>');
            } else {
                // File uploaded successfully
                $fileData = $this->upload->data();
                $filePath = $fileData['file_name']; 

                // Continue with database insertion and other logic
                $this->load->model('RegModel');
                $data = $this->RegModel->insert_data($name, $email, $phone, $password, $filePath);

                $data['message'] = $data['message']; // Update the message from the model
            }
        }

        $this->load->view('RegView', $data); // Pass the $data variable to the view
    }

 
}

?>



