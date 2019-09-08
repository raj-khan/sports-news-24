<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Super_admin extends CI_Controller
{
    //# Admin Model load
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_model');
        $admin_id = $this->session->userdata('id');
        if($admin_id == NULL){
            redirect('admin', 'refresh');
        }
    }

    //# Login then view Dashboard
    public function index(){
        $data = array();
        $data['dashboard_content'] = $this->load->view('admin/dashboard_content', '', TRUE);
        $this->load->view('admin/dashboard_master', $data);
    }

    public function logout(){
        $this->session->unset_userdata('id');
        $this->session->unset_userdata('name');
        $session_data['login_message'] = "Successfully logged out";
        $this->session->set_userdata($session_data);
        redirect('user-admin');
    }



    //changePass
    public function changePass(){
        $data = array();
        $data['dashboard_content'] = $this->load->view('admin/adminpages/password/changePass', '', TRUE);
        $this->load->view('admin/dashboard_master', $data);
    }

    //updatePassword
    public function updatePassword(){
        $this->load->library('form_validation');
        $this->form_validation->set_rules('newPass', 'New Password', 'trim|required');
        $this->form_validation->set_rules('newConfirmPass', 'Confirm Password', 'trim|required|matches[newPass]');


        if ($this->form_validation->run() == TRUE){
            $query = $this->Admin_model->updatePassword();
            if ($query) {
                $this->session->set_flashdata('msg', 'Successfully Change Your Pass...');
                redirect('admin/change-password');
            } else {
                $this->session->set_flashdata('msg', 'Sorry ! Old Password not match.!');
                redirect('admin/change-password');
            }
        }else{
            $this->session->set_flashdata('msg', 'Confirm Password not match...');
            redirect('admin/change-password');
        }
    }
}