

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

                // Example database insertion
                $this->load->model('RegModel');
                $data = $this->RegModel->insert_data($name, $email, $phone, $password, $filePath);

                $data['message'] = $data['message']; // Update the message from the model
            }
        }

        $this->load->view('RegView', $data); // Pass the $data variable to the view
    }
}

?>
