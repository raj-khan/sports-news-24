<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Category_model extends CI_Model{

    // Category Insert
    public function save_category_info(){
        $data = array();

        $data['name'] = $this->input->post('name', TRUE);
        $data['description'] = $this->input->post('description', TRUE);
        $data['status'] = $this->input->post('status', TRUE);
        $this->db->insert('main_categories', $data);
        return true;
    }



    public function manage_category_info(){
        $this->db->select('*');
        $this->db->from('main_categories');
        $result_query = $this->db->get();
        $category_info = $result_query->result();

        return $category_info;
    }

    public function find_category($id){
        $this->db->select('*');
        $this->db->from('main_categories');
        $this->db->where('id',$id);
        $result_query = $this->db->get();
        $category_name = $result_query->row();

        return $category_name;
    }



    public function publish_category_info($id){
        $this->db->set('status', 1);
        $this->db->where('id', $id);
        $this->db->update('main_categories');
    }

    public function un_publish_category_info($id){
        $this->db->set('status', 0);
        $this->db->where('id', $id);
        $this->db->update('main_categories');
    }

    // delete Category
    public function delete_category_info($id){
        $this->db->where('id', $id);
        $this->db->delete('main_categories');
    }
    // Show For  Update Category
    public function show_for_update_category_info($id){
        $this->db->select('*');
        $this->db->from('main_categories');
        $this->db->where('id', $id);
        $query_result = $this->db->get();
        $category_info = $query_result->row();
        return $category_info;
    }
    // Update Category
    public function update_category_info(){
        $data = array();

        $data['id'] = $this->input->post('id', TRUE);
        $data['name'] = $this->input->post('name', TRUE);
        $data['description'] = $this->input->post('description', TRUE);
        $data['status'] = $this->input->post('status', TRUE);

        $this->db->where('id', $data['id']);
        $this->db->update('main_categories', $data);
    }


//    Show Publish Main_categories
        Public function show_publish_category(){
            $this->db->select('*');
            $this->db->from('main_categories');
            $this->db->where('status', 1);

            $query_result = $this->db->get();
            $category_info = $query_result->result();
            return $category_info;

        }


    public function find_publish_category(){
        $this->db->select('*');
        $this->db->from('main_categories');
        $this->db->where('status', 1);
        $result_query = $this->db->get();
        $category_info = $result_query->result();

        return $category_info;
    }

    public function selected_publish_category(){
        $this->db->select('*');
        $this->db->from('main_categories');
        $result_query = $this->db->get();
        $category_info = $result_query->result();

        return $category_info;
    }



    // ===================Sub Category===========================


    public function save_sub_category_info(){
        $data = array();

        $data['main_category_id'] = $this->input->post('main_category_id', TRUE);
        $data['name'] = $this->input->post('name', TRUE);
        $data['description'] = $this->input->post('description', TRUE);
        $data['status'] = $this->input->post('status', TRUE);

        $this->db->insert('sub_categories', $data);
        return true;
    }



    public function manage_sub_category_info(){
        $this->db->select('*');
        $this->db->from('sub_categories');
        $result_query = $this->db->get();
        $category_info = $result_query->result();

        return $category_info;
    }





    public function publish_sub_category_info($id){
        $this->db->set('status', 1);
        $this->db->where('id', $id);
        $this->db->update('sub_categories');
    }

    public function un_publish_sub_category_info($id){
        $this->db->set('status', 0);
        $this->db->where('id', $id);
        $this->db->update('sub_categories');
    }


    // delete Category
    public function delete_sub_category_info($id){
        $this->db->where('id', $id);
        $this->db->delete('sub_categories');
    }

    // Show For  Update
    public function show_for_update_sub_category_info($celebrity_id){
        $this->db->select('*');
        $this->db->from('sub_categories');
        $this->db->where('id', $celebrity_id);
        $query_result = $this->db->get();
        $category_info = $query_result->row();
        return $category_info;
    }


    // Update
    public function update_sub_category_info(){
        $data = array();

        $data['id'] = $this->input->post('id', TRUE);
        $data['main_category_id'] = $this->input->post('main_category_id', TRUE);
        $data['name'] = $this->input->post('name', TRUE);
        $data['description'] = $this->input->post('description', TRUE);
        $data['status'] = $this->input->post('status', TRUE);

        $this->db->where('id', $data['id']);
        $this->db->update('sub_categories', $data);
    }

}