<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CommonPage extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('CommonPageModel');
        $admin_id = $this->session->userdata('id');
        if ($admin_id == NULL) {
            redirect('user-admin', 'refresh');
        }
    }

    public function createCommonPage()
    {
        $data = array();
        $data['dashboard_content'] = $this->load->view('admin/adminpages/add_other_page', '', TRUE);
        $this->load->view('admin/dashboard_master', $data);
    }

    // storeCommonPage
    public function storeCommonPage()
    {
        $query = $this->CommonPageModel->storeCommonPage();
        if ($query) {
            $this->session->set_flashdata('msg', 'Successfully Save...');
            redirect('user-admin/add-common-page');
        } else {
            $this->session->set_flashdata('msg', 'Sorry ! Something Went Wrong.!');
            redirect('user-admin/add-common-page');
        }
    }

    //Category Manage
    public function viewCommonPage()
    {
        $data = array();
        $data['commonPageContent'] = $this->CommonPageModel->viewCommonPage();

        $data['dashboard_content'] = $this->load->view('admin/adminpages/viewCommonPage', $data, TRUE);
        $this->load->view('admin/dashboard_master', $data);
    }

    //showForUpdateCommonPage
    public function showForUpdateCommonPage($id){
        $data = array();
        $data['contentInfo'] = $this->CommonPageModel->showForUpdateCommonPage($id);
        $data['dashboard_content'] = $this->load->view('admin/adminpages/updateCommonPage', $data, TRUE);
        $this->load->view('admin/dashboard_master', $data);
    }

    //updateCommonPage
    public function updateCommonPage(){
        $this->CommonPageModel->updateCommonPage();
        redirect('user-admin/view-common-page');
    }

    //deleteCommonPage
    public function deleteCommonPage($id){
        $this->CommonPageModel->deleteCommonPageInfo($id);
        redirect('user-admin/view-common-page');
    }



}