<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_user_panel extends CI_Controller
{

    //# Load Admin Model
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_model');
        $admin_id = $this->session->userdata('id');
        if ($admin_id != NULL) {
            redirect('admin/super-admin', 'refresh');
        }
    }


    //#Admin Page Loader
    public function index()
    {
        $this->load->view('admin_login');
    }

    //# Admin Login
    public function admin_login_check()
    {
        $email = $this->input->post('email');
        $pass = $this->input->post('pass');

        $result = $this->Admin_model->admin_login_check_info($email, $pass);

        $session_data = array();

        if($result){

            foreach ($result as $key => $value){
                $session_data['id'] = $value['id'];
                $session_data['name'] = $value['name'];
            }
            $this->session->set_userdata($session_data);

            redirect('admin/super-admin');
        }else{

            $session_data['login_message'] = "Invalid Login";
            $this->session->set_userdata($session_data);

            redirect(admin);
        }
    }
}