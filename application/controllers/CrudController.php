<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CrudController extends CI_Controller {

public function __construct(){

   parent:: __construct();
   $this->load->model('Crud_model'); // calling models / Crud_model.php file // ** loading the model file**
   $this->load->library('session'); // for session ** loading the session ** 

}
	public function index(){

        $data['result'] = $this->Crud_model->getAllUser(); // call the getAllUser function from Crud_model.php
		$this->load->view('crudView',$data);// yung name ng file sa view folder
        
    }
    
    public function create(){//function for creat or storing data

        $this->Crud_model->createData();
        $this->session->set_flashdata('success_msg','<div class="alert alert-success text-center">Successfully Added! <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> </div>');// for message success
        
        redirect("CrudController");// redirect location header 
         
    }

    public function delete_user(){

            $id = $this->uri->segment(3);
            $this->load->model("Crud_model");
            $this->Crud_model->delete_user($id);
            redirect("CrudController/deleted");
    }

    public function deleted(){

        $this->index();

    }

    public function edit($id){
        $data['row'] = $this->Crud_model->select_user_to_edit($id);//calling function select_user_to_edit from Crud_model.php file
        $this->load->view('crudEdit',$data);// goto edit page may value na equal dun sa id ng user na hawak ng variable $id

    }

    public function update_user($id){

        $this->Crud_model->update_user_data($id);
        redirect("CrudController/");
    }
}
