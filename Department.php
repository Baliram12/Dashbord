<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
class Department extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->database();
        $this->load->model('Dmodel');
        
    }
      public function index()
{
        $this->load->view('Department/header');
        $this->load->view('Department/index');
        $this->load->view('Department/footer');
        $this->load->view('Department/deptform');
    
}
    public function demo()
    {
      
        $department = $this->input->post('department');
        $description = $this->input->post('description');
        
        $a=$this->Dmodel->demo($department,$description);
     
            
         
        
      }


    

  }
?>