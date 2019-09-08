<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller{

    //model construct
    public function __construct()
    {
        parent::__construct();
        $this->load->model('News_model');
        $admin_id = $this->session->userdata('id');
        if ($admin_id == NULL) {
            redirect('user-admin', 'refresh');
        }
    }

    //add news page load
    public function add_news(){
        $data = array();
        $data['dashboard_content'] = $this->load->view('admin/adminpages/add_news', '', TRUE);
        $this->load->view('admin/dashboard_master', $data);
    }

    public function save_news(){
        $query = $this->News_model->save_news_info();

        if ($query) {
            $this->session->set_flashdata('msg', 'Successfully Save...');
            redirect('user-admin/add-news');
        } else {
            $this->session->set_flashdata('msg', 'Sorry ! Something Went Wrong.!');
            redirect('user-admin/add-news');
        }
    }

    //view_news
    public function view_news(){
        $data = array();
        $data['news_info'] = $this->News_model->view_news_info();
        $data['dashboard_content'] = $this->load->view('admin/adminpages/view_news', $data, TRUE);
        $this->load->view('admin/dashboard_master', $data);
    }


    //Publish News
    public function publish_news($id)
    {
        $this->News_model->publish_news_info($id);
        redirect('user-admin/view-news');
    }


    //Un-publish News
    public function un_publish_news($id)
    {
        $this->News_model->un_publish_news_info($id);
        redirect('user-admin/view-news');
    }

    //show_for_update_news
    public function show_for_update_news($id){
        $data = array();
        $data['news_info'] = $this->News_model->show_for_update_news_info($id);
        $data['dashboard_content'] = $this->load->view('admin/adminpages/update_news', $data, TRUE);
        $this->load->view('admin/dashboard_master', $data);
    }

    //update_news
    public function update_news(){
        $this->News_model->update_news_info();
        redirect('user-admin/view-news');
    }

    //delete_news
    public function delete_news($id){
        $this->News_model->delete_news_info($id);
        redirect('user-admin/view-news');
    }
}