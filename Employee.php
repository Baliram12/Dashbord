<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Employee extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
    }
        public function index(){
        $this->load->view('Employee/Empyform');    
        $this->load->view('Employee/header');
        $this->load->view('Employee/index');
        $this->load->view('Employee/footer');
    }
}