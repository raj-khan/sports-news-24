<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin_model extends CI_Model{

    // Admin Login
    public function admin_login_check_info($email, $pass){
        $query = $this->db->where('email',$email)->where('pass',md5($pass))->get('user');

        return $query->result_array();
    }



    //updatePassword
    public function updatePassword(){
        $data = array();

        $oldPass = md5($this->input->post('current_pass', TRUE));
        $newPass = md5($this->input->post('newPass'));
        $newConfirmPass = md5($this->input->post('newConfirmPass'));


        $this->db->select('*');
        $this->db->from('user');
        $result_query = $this->db->get();
        $oldPassCheck = $result_query->row();
        $currentPassId = $oldPassCheck->id;

        if ($oldPassCheck->pass == $oldPass) {
            if ($newPass == $newConfirmPass) {
                $data['pass'] = md5($this->input->post('newConfirmPass'));
                $this->db->where('id', $currentPassId);
                $updateQuery = $this->db->update('user', $data);
                if ($updateQuery) {
                    return true;
                } else {
                    return false;
                }
            }
        }
    }

}