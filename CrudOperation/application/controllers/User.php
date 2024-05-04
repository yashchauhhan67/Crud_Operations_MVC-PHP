<?php

class User extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('user_model');
    }

//    public function do_upload() {
//        
//        $config['upload_path']          = './assets';
//        print_r($config);exit;
//        $config['allowed_types']        = 'gif|jpg|png|pdf';
//        $config['max_size']             = 10000; // Set max file size in kilobytes
////        $config['max_width']            = 10242; // Set max width allowed
////        $config['max_height']           = 768; // Set max height allowed
//
//        
//        $this->load->library('upload', $config);
//        if (!$this->upload->do_upload('file')) {
//            $file1 = $this->upload->data();
//            $image = $file1['File_name'];
//            $data['file'] = $image;
//            $error = array('error' => $this->upload->display_errors());
////            $this->load->view('upload_form', $error);
//            echo 'hii';
//        } else {
//            $data = array('upload_data' => $this->upload->data());
////            $this->load->view('upload_success', $data);
//            echo 'byee';
//        }
//    }
//
//
//    function Do_upload() {
//        
//        $confir= array(
//            'upload_path' => './assets',
//            'allowed_types' => 'gif|pdf|jpg',
//            'overwrite'  => TRUE ,
//            'max_size' => '4056754',
//            'file_path' =>'',
//            'file_name' =>
//        )
//        $config['upload_path'] = './assets'; // Specify the upload path
//        $config['allowed_types'] = 'gif|jpg|png|pdf';
//        $config['max_size'] = 10000; // Set max file size in kilobytes
//        $config['file_name'] = $_FILES['file']['name'];
//        $this->load->library('upload', $config); // Load the upload library with configuration
//print_r($config);exit;
//        if (!$this->upload->do_upload('file')) { 
//            echo"hiiii"; exit;// 'file' should be the name attribute of your file input field
//            $error = array('error' => $this->upload->display_errors());
//            // Handle the error here
//            echo 'Error: ' . $error['error'];
//        } else {
//            $file_data = $this->upload->data();
//            $file_name = $file_data['file'];
//            print_r($file_name);exit;// Get the uploaded file name
//            // Now you can insert the file name into the database or do any other processing
//            $data = array(
//                'file_name' => $file_name
//                    // Add other data you want to insert along with the file name
//            );
//
//            // Assuming you have loaded the model already
//            if ($this->user_model->insertUser($data)) {
//                echo 'File uploaded successfully and data inserted into the database.';
//            } else {
//                echo 'Error: Failed to insert data into the database.';
//            }
//        }
//    }
//    
// function do_upload()
//{
//    $config = array(
//        'upload_path'   => './upload',
//        'allowed_types' => 'gif|jpg|png|jpeg|pdf',
//        'overwrite'     => TRUE,
//        'max_size'      => '30892546',
//        //'max_height'    => '900',
//        // 'max_width'     => '1024',
//        'file_path'     => '',
//        'file_name'     => $_FILES['file']['name'], // Use 'file' instead of 'photo'
//    );
//    print_r($config);exit;
//    // Initialize the upload library with the configuration
//    $this->load->library('upload', $config);
//
//    if (!$this->upload->do_upload('file')) { // Use 'file' instead of 'photo'
//        // If upload fails, return the old photo (if any)
//        return $this->input->post('old_photo');
//    } else {
//        // If upload is successful, get the uploaded image data
//        $image_data = $this->upload->data();
//
//        // Check if the image exceeds 200x200 pixels
//        if ($image_data['image_width'] > 200 || $image_data['image_height'] > 200) {
//            // Resize the image
//            $config['image_library']  = 'gd2';
//            $config['source_image']   = $image_data['full_path'];
//            $config['maintain_ratio'] = TRUE;
//            $config['width']          = 200;
//            $config['height']         = 200;
//
//            $this->load->library('image_lib', $config);
//            $this->image_lib->resize();
//            $this->image_lib->clear();
//        }
//
//        // Return the file name of the uploaded image
//        return $image_data['file_name'];
//    }
//}
//
//
//  
//    function add() {
//        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//
//            $username = $this->input->post('username');
//            $email = $this->input->post('email');
//            $mobile = $this->input->post('mobile');
//            $address = $this->input->post('address');
//            $file = $this->input->post('file');
//            $this->file_data();
//            $data = array(
//                'username' => $username,
//                'email' => $email,
//                'mobile' => $mobile,
//                'address' => $address,
//                'file' => $file,
//            );
//
//            $status = $this->user_model->insertUser($data);
//            if ($status == true) {
//                $this->session->set_flashdata('success', 'successfully Added');
//                redirect(base_url('user/add'));
//            } else {
//                $this->session->set_flashdata('error', 'Error');
//                $this->load->view('user/add_user');
//            }
//        } else {
//            $this->load->view('user/add_user');
//        }
//    }
//
//    Public function Doupload() {
////        $this->form_validation->set_rules('pic_title', 'Picture Title', 'required');
////        if ($this->form_validation->run() == FALSE) {
////            $this->load->view('user/add_user');
////        } else {
//        //get the form values
////            $data['pic_title'] = $this->input->post('pic_title', TRUE);
////            $data['pic_desc'] = $this->input->post('pic_desc', TRUE);
//        //file upload code 
//        //set file upload settings 
//        $config['upload_path'] = './upload';
//        $config['allowed_types'] = 'gif|jpg|png';
//        $config['max_size'] = 10000;
//
//        $this->load->library('upload', $config);
//
//        $this->upload->initialize($config);
////        print_r($config);exit;
//        if (!$this->upload->do_upload('pic_file')) {
//            $error = array('error' => $this->upload->display_errors());
//            $this->load->view('user/add_user', $error);
//        } else {
//
//            //file is uploaded successfully
//            //now get the file uploaded data 
//            $upload_data = $this->upload->data();
//
//            //get the uploaded file name
//            $data['pic_file'] = $upload_data['file_name'];
//
//            //store pic data to the db
//            $this->User_model->insertUser($data);
//
////                redirect('/');
//        }
////            $this->load->view('footer');
//    }
//    
    public function form() {
        $this->load->view('user/add_user');
//		$this->load->view('footer');
    }

    public function file_data() {
        $data['username'] = $this->input->post('username', TRUE);
        $data['email'] = $this->input->post('email', TRUE);
        $data['mobile'] = $this->input->post('mobile', TRUE);
        $data['address'] = $this->input->post('address', TRUE);

        // File upload settings
        $config['upload_path'] = './upload/';
        $config['allowed_types'] = 'gif|jpg|png|pdf|jpeg';
        $config['max_size'] = 10000;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('file')) {
            $error = array('error' => $this->upload->display_errors());
            print_r($error);
        } else {
            $upload_data = $this->upload->data();
            $data['file'] = $upload_data['file_name'];

            // Store file data to the database
//            $status = $this->user_model->insertUser($data);
            $status = $this->user_model->store_pic_data($data);

            if ($status == true) {
                $this->session->set_flashdata('success', 'successfully Added');

//                $this->load->view("user/index");
                $this->index2();
            } else {

                $this->session->set_flashdata('error', 'Error');
                $this->load->view('user/form');
            }
        }

//                echo 'File uploaded and data stored successfully.';
//            } else {
//                echo 'Error: Failed to store data in the database.';
//            }
    }

    public function index2() {
        $this->load->model('user_model');

        $data['users'] = $this->user_model->get_all_pics();
//        redirect(base_url('user/index/'));
//        $this->load->view('header');
        $this->load->view('user/index', $data);
//        $this->load->view('footer');
    }

    function index() {
        $data['users'] = $this->user_model->getUsers();
        $this->load->view('user/file_data', $data);
    }

//    function edit($id) {
//
//        $data['user'] = $this->user_model->getUser($id);
//        $data['id'] = $id;
//
//        $data['username'] = $this->input->post('username', TRUE);
//        $data['email'] = $this->input->post('email', TRUE);
//        $data['mobile'] = $this->input->post('mobile', TRUE);
//        $data['address'] = $this->input->post('address', TRUE);
//
//        // File upload settings
//        $config['upload_path'] = './upload/';
//        $config['allowed_types'] = 'gif|jpg|png|pdf|jpeg';
//        $config['max_size'] = 10000;
//
//        $this->load->library('upload', $config);
//
//        if (!$this->upload->do_upload('file')) {
//            $error = array('error' => $this->upload->display_errors());
//            print_r($error);
//        } else {
//            $upload_data = $this->upload->data();
//            $data['file'] = $upload_data['file_name'];
//
//            $status = $this->user_model->updateUser($data, $id);
//            if ($status == true) {
//                $this->session->set_flashdata('success', 'successfully Updated');
//                redirect(base_url('user/index2/' . $id));
//            } else {
//                $this->session->set_flashdata('error', 'Error');
//                $this->load->view('user/edit_user');
//            }
//        }
//        $this->load->view('user/edit_user', $data);
//    }
    function edit_form($id) {
        $data['user'] = $this->user_model->getUser($id);
//        $this->load->view('user/edit_user', $data);
        echo json_encode($data);
    }

    function delete($id) {
        if (is_numeric($id)) {
            $status = $this->user_model->deleteUser($id);
            if ($status == true) {
                $this->session->set_flashdata('deleted', 'successfully Deleted');
                redirect(base_url('user/index2/'));
            } else {
                $this->session->set_flashdata('error', 'Error');
                redirect(base_url('user/index2/'));
            }
        }
    }

    public function edit() {
        // Get user data
//    $data['id'] = $this->user_model->getUser($id);
        $id = $this->input->post('id', TRUE);

//                $data['id'] = $this->input->post('id', TRUE);
//                print_r($id);exit;
//         print_r($id);exit;
        // Get form data

        $data['id'] = $this->input->post('id', TRUE);
        $data['username'] = $this->input->post('username', TRUE);
        $data['email'] = $this->input->post('email', TRUE);
        $data['mobile'] = $this->input->post('mobile', TRUE);
        $data['address'] = $this->input->post('address', TRUE);
        $data['file'] = $this->input->post('file1', TRUE);
//  print_r($data);exit;
        // Check if a file is uploaded
        if (!empty($_FILES['file']['name'])) {
            // File upload settings
            $config['upload_path'] = './upload/';
            $config['allowed_types'] = 'gif|jpg|png|pdf|jpeg';
            $config['max_size'] = 10000;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('file')) {
                // Handle upload error
                $error = array('error' => $this->upload->display_errors());
                print_r($error);
                return; // Stop further execution
            } else {
                // Upload successful, update file data
                $upload_data = $this->upload->data();
                $data['file'] = $upload_data['file_name'];
            }
        }
//        else {
//                // No new file selected, retrieve the existing file name from the database
//                $user = $this->user_model->getUser($id);
//                $data['file'] = $user->file;
//            }
        // Update user data in the database
        $this->user_model->updateUser($id, $data);
        if($this){
             $this->session->set_flashdata('success', 'User updated successfully');
            redirect('user/index2');
        } else {
            $this->session->set_flashdata('error', 'Error updating user');
            $this->load->view('user/index', $data);
        }
            
        
//        $status = $this->user_model->updateUser($id, $data);
////        print_r($status);exit;
//        if ($status) {
//            // Update successful, redirect to index or show success message
//            $this->session->set_flashdata('success', 'User updated successfully');
//            redirect('user/index2');
//            
//        } else {
//            // Update failed, show error message or form again
//            $this->session->set_flashdata('error', 'Error updating user');
////            echo 'hiiiiiiiiiii';
//            redirect('user/index2');
////            $this->load->view('user/index', $data);
////            print_r($status);exit;
//        }
    }
}
