<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CommonPageModel extends CI_Model{



//    Show Publish Common Category
    public function showCommonPageCategory(){
        $this->db->select('*');
        $this->db->from('common_categories');

        $query_result = $this->db->get();
        $category_info = $query_result->result();
        return $category_info;
    }


    //storeCommonPage
    public function storeCommonPage(){
        $data = array();

        $data['category_id'] = $this->input->post('category', TRUE);
        $data['page_content'] = $this->input->post('content', TRUE);
        $this->db->insert('common_page', $data);
        return true;
    }


    //viewCommonPage
    public function viewCommonPage(){
        $this->db->select('*');
        $this->db->from('common_page');
        $result_query = $this->db->get();
        $commonPageContent = $result_query->result();

        return $commonPageContent;
    }

    //findCommonPageCategory
    public function findCommonPageCategory($id){
        $this->db->select('*');
        $this->db->from('common_categories');
        $this->db->where('id',$id);
        $result_query = $this->db->get();
        $category_name = $result_query->row();

        return $category_name;
    }

    //selectedCommonPageCategory
    public function selectedCommonPageCategory(){
        $this->db->select('*');
        $this->db->from('common_categories');
        $result_query = $this->db->get();
        $category_info = $result_query->result();

        return $category_info;
    }

    //showForUpdateCommonPage
    public function showForUpdateCommonPage($id){
        $this->db->select('*');
        $this->db->from('common_page');
        $this->db->where('id', $id);
        $query_result = $this->db->get();
        $contentInfo = $query_result->row();
        return $contentInfo;
    }

    //updateCommonPage
    public function updateCommonPage(){
        $data = array();

        $data['id'] = $this->input->post('id', TRUE);
        $data['category_id'] = $this->input->post('category', TRUE);
        $data['page_content'] = $this->input->post('content', TRUE);

        $this->db->where('id', $data['id']);
        $this->db->update('common_page', $data);
    }

    //deleteCommonPageInfo
    public function deleteCommonPageInfo($id){
        $this->db->where('id', $id);
        $this->db->delete('common_page');
    }
}