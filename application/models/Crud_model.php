<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud_model extends CI_Model {


	public function __construct(){

        $this->load->database();

    }
    function createData(){//insert data 

        $data = array (
            'fname' => $this->input->post('firstname'),
            'lname' => $this->input->post('lastname'),
            'birthday' => $this->input->post('birthday'),
            'address' => $this->input->post('address'),
            'contact' => $this->input->post('contact')
       
        );
            $this->db->insert('tbl_users',$data);
            
                  

    }
    function getAllUser(){//fetch all data to table 

        $query=$this->db->query('SELECt * FROM tbl_users');
        $row= $query->row_array(5);
        return $query->result();
    }
    function selectAll_num_rows(){//select number of rows in tables

        $query=$this->db->query('SELECt * FROM tbl_users');

        echo "Total_members: ".$query->num_rows()."<br><br>";
        return $query->result();
    }

    function delete_user($id){//delete user data

        $this->db->where("id", $id);
        $this->db->query('delete from tbl_users WHERE id ='.$id);//delete data from tbl_users OR // using query
        //$this->db->delete(' tbl_users);delete data from tbl_users using delete function
    }

    function select_user_to_edit($id){//select id of user you want to edit

        $query=$this->db->query('Select * from tbl_users WHERE `id` ='.$id);
        return $query->row();

    }
    function update_user_data($id){//updating user datas

        $data = array (
            'fname' => $this->input->post('firstname'),
            'lname' => $this->input->post('lastname'),
            'birthday' => $this->input->post('birthday'),
            'address' => $this->input->post('address'),
            'contact' => $this->input->post('contact')
       
        );
            $this->db->where('id',$id);
            $this->db->update('tbl_users',$data);
            
        
    }
	
}
