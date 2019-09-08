<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Category_model');
        $admin_id = $this->session->userdata('id');
        if ($admin_id == NULL) {
            redirect('user-admin', 'refresh');
        }
    }

    public function add_category()
    {
        $data = array();
        $data['dashboard_content'] = $this->load->view('admin/adminpages/add_category', '', TRUE);
        $this->load->view('admin/dashboard_master', $data);
    }

    // Save Category
    public function save_category()
    {
        $query = $this->Category_model->save_category_info();
        if ($query) {
            $this->session->set_flashdata('msg', 'Successfully Save...');
            redirect('user-admin/add-main-category');
        } else {
            $this->session->set_flashdata('msg', 'Sorry ! Something Went Wrong.!');
            redirect('user-admin/add-main-category');
        }
    }


    //Category Manage
    public function manage_category()
    {
        $data = array();
        $data['all_category_info'] = $this->Category_model->manage_category_info();

        $data['dashboard_content'] = $this->load->view('admin/adminpages/manage_category', $data, TRUE);
        $this->load->view('admin/dashboard_master', $data);
    }

    //Publish Category
    public function publish_category($id)
    {
        $this->Category_model->publish_category_info($id);
        redirect('user-admin/view-all-category');
    }


    //Un-publish Category
    public function un_publish_category($id)
    {
        $this->Category_model->un_publish_category_info($id);
        redirect('user-admin/view-all-category');
    }

    // Category Delete
    public function delete_category($id)
    {
        $this->Category_model->delete_category_info($id);
        redirect('user-admin/view-all-category');
    }

    // Show Data For  Category Update
    public function show_for_update_category($id)
    {
        $data = array();
        $data['category_info'] = $this->Category_model->show_for_update_category_info($id);
        $data['dashboard_content'] = $this->load->view('admin/adminpages/update_category', $data, TRUE);
        $this->load->view('admin/dashboard_master', $data);
    }

    //  Category Update
    public function update_category()
    {
        $this->Category_model->update_category_info();
        redirect('user-admin/view-all-category');
    }


    //============================Celebrity Category=====================

    public function add_sub_category()
    {
        $data = array();
        $data['dashboard_content'] = $this->load->view('admin/adminpages/add_sub_category', '', TRUE);
        $this->load->view('admin/dashboard_master', $data);
    }

    // Save Category
    public function save_sub_category()
    {
        $sub_query = $this->Category_model->save_sub_category_info();

        if ($sub_query) {
            $this->session->set_flashdata('msg', 'Successfully Save...');
            redirect('user-admin/add-sub-category');
        } else {
            $this->session->set_flashdata('msg', 'Sorry ! Something Went Wrong.!');
            redirect('user-admin/add-sub-category');
        }
    }


    //Category Manage
    public function manage_sub_category()
    {
        $data = array();
        $data['celebrity_category_info'] = $this->Category_model->manage_sub_category_info();
        $data['dashboard_content'] = $this->load->view('admin/adminpages/manage_sub_category', $data, TRUE);
        $this->load->view('admin/dashboard_master', $data);
    }


    //Publish
    public function publish_sub_category($id)
    {
        $this->Category_model->publish_sub_category_info($id);
        redirect('user-admin/view-sub-category');
    }


    //Un-publish
    public function un_publish_sub_category($id)
    {
        $this->Category_model->un_publish_sub_category_info($id);
        redirect('user-admin/view-sub-category');
    }


    //  Delete
    public function delete_sub_category($id)
    {
        $this->Category_model->delete_sub_category_info($id);
        redirect('user-admin/view-sub-category');
    }


    // Show Data For  Update
    public function show_for_update_sub_category($celebrity_id)
    {
        $data = array();
        $data['category_info'] = $this->Category_model->show_for_update_sub_category_info($celebrity_id);
        $data['dashboard_content'] = $this->load->view('admin/adminpages/update_sub_category', $data, TRUE);
        $this->load->view('admin/dashboard_master', $data);
    }


    //   Update
    public function update_sub_category()
    {
        $this->Category_model->update_sub_category_info();
        redirect('user-admin/view-sub-category');
    }


}