<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of User_model
 *
 * @author hp
 */
class User_model extends CI_Model {

//    function insertUser($data) {
//
//        $this->db->insert('user', $data);
//        if ($this->db->affected_rows() >= 0) {
//            return true;
//        } else {
//            return false;
//        }
//    }

    function get_all_pics() {
        $all_pics = $this->db->get('user');
        return $all_pics->result();
    }

    function store_pic_data($data) {
        $insert_data['username'] = $data['username'];
        $insert_data['email'] = $data['email'];
        $insert_data['mobile'] = $data['mobile'];
        $insert_data['address'] = $data['address'];
        $insert_data['file'] = $data['file'];

        $query = $this->db->insert('user', $insert_data);

        if ($this->db->affected_rows() >= 0) {
            return true;
        } else {
            return false;
        }
    }

    function getUsers() {
        $query = $this->db->get('user');
        return $query->result_array();
    }

    function getUser($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('user');
        return $query->row();
    }

//    function updateUser($data, $id) {
//        $this->db->where('id', $id);
//        $this->db->update('user', $data);
//        if ($this->db->affected_rows() >= 0) {
//            return true;
//        } else {
//            return false;
//        }
//    }

    public function updateUser($id, $data) {


//         Check if a new file is uploaded
        if (isset($data['file'])) {
            // File uploaded, update the file name
            $this->db->where('id', $id);
            $this->db->update('user', $data);
        } else {
            // No new file selected, retrieve the existing file name from the database
            $existing_file = $this->db->get_where('user', array('id' => $id))->row()->file;
            $data['file'] = $existing_file;
        }
//       print_r($data);exit;
            $this->db->where('id', $id);
            $this->db->update('user', $data);
            return ($this->db->affected_rows() > 0);
        }

        function deleteUser($id) {
            $this->db->where('id', $id);
            $this->db->delete('user');
            if ($this->db->affected_rows() >= 0) {
                return true;
            } else {
                return false;
            }
        }

    }
    