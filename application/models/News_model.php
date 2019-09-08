<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News_model extends CI_Model{

    //show_publish_news_category
    public function show_publish_news_category(){
        $this->db->select('*');
        $this->db->from('sub_categories');
        $this->db->where('status', 1);
        $this->db->order_by('id', 'DESC');
        $query_result = $this->db->get();
        $category_info = $query_result->result();
        return $category_info;
    }

    //save_news_info
    public function save_news_info(){
        $data = array();

        $data['category_id'] = $this->input->post('category', TRUE);
        $data['title'] = $this->input->post('title', TRUE);
        $data['news'] = $this->input->post('news', TRUE);

        //img
        $config['upload_path'] = './upload/news/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = 100000;
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('file')) {
            $error = array('error' => $this->upload->display_errors());

            $this->load->view('upload_form', $error);
        } else {
            $uploadData = $this->upload->data();

            //Resize
            $this->news_image_resize('./upload/news/' .$uploadData['file_name'], $uploadData['file_name']);

            $data['img'] = $uploadData['file_name'];

        }

        $data['status'] = $this->input->post('status', TRUE);
        $data['meta_keywords'] = $this->input->post('meta_keywords', TRUE);
        $data['meta_description'] = $this->input->post('meta_description', TRUE);

        //        =============Inserted To Table=================
        $this->db->insert('news', $data);

        return true;
    }

    //news_image_resize
    public function news_image_resize($path, $file){
        $config_resize = array();
        $config_resize['image_library'] = 'gd2';
        $config_resize['source_image'] = $path;
        $config_resize['create_thumb'] =  FALSE;
        $config_resize['maintain_ratio'] =  TRUE;
        $config_resize['quality'] =  '100%';
        $config_resize['height']          =  250;
        $config_resize['new_image']          = './upload/news/' . $file;
        $this->image_lib->initialize($config_resize);
        $this->load->library('image_lib', $config_resize);
        $this->image_lib->resize();
    }

    //view_news_info
    public function view_news_info(){
        $this->db->select('*');
        $this->db->from('news');
        $result_query = $this->db->get();
        $news_info = $result_query->result();

        return $news_info;
    }

    //find_sub_category
    public function find_sub_category($id){
        $this->db->select('*');
        $this->db->from('sub_categories');
        $this->db->where('id', $id);
        $result_query = $this->db->get();
        $category_name = $result_query->row();

        return $category_name;
    }

    //publish_news_info
    public function publish_news_info($id){
        $this->db->set('status', 1);
        $this->db->where('id', $id);
        $this->db->update('news');
    }


    //un_publish_news_info
    public function un_publish_news_info($id){
        $this->db->set('status', 0);
        $this->db->where('id', $id);
        $this->db->update('news');
    }

    //selected_news_category
    public function selected_news_category(){
        $this->db->select('*');
        $this->db->from('sub_categories');
        $result_query = $this->db->get();
        $category_info = $result_query->result();

        return $category_info;
    }

    //show_for_update_news_info
    public function show_for_update_news_info($id){
        $this->db->select('*');
        $this->db->from('news');
        $this->db->where('id', $id);
        $this->db->where('status', 1);
        $this->db->order_by('created_at', 'DESC');
        $query_result = $this->db->get();
        $news_info = $query_result->row();
        return $news_info;
    }

    //update_news_info
    public function update_news_info(){
        $data = array();

        $data['id'] = $this->input->post('id', TRUE);
        $data['category_id'] = $this->input->post('category', TRUE);
        $data['title'] = $this->input->post('title', TRUE);
        $data['news'] = $this->input->post ('news', TRUE);

        if ($_FILES['file']['name'] != "") {
            $config['upload_path'] = './upload/news/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['raw_name'] = 'news';
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('file')) {
                $error = array('error' => $this->upload->display_errors());
                $this->load->view('upload_form', $error);
            } else {
                $uploadData = $this->upload->data();

                //Resize
                $this->news_image_resize('./upload/news/' .$uploadData['file_name'], $uploadData['file_name']);

                $data['img'] = $uploadData['file_name'];
            }
        } else {
            $data['img'] = $this->input->post('old');
        }

        $data['status'] = $this->input->post('status', TRUE);
        $data['meta_keywords'] = $this->input->post('meta_keywords', TRUE);
        $data['meta_description'] = $this->input->post('meta_description', TRUE);

        $this->db->where('id', $data['id']);
        $this->db->update('news', $data);
    }

    //delete_news_info
    public function delete_news_info($id){
        $this->db->where('id', $id);
        $this->db->delete('news');
    }


    public function hitsCount($id) {
        $this->db->set('hits', 'hits+1', FALSE);
        $this->db->where('post_id', $id);
        $this->db->update('tbl_post');
    }

}