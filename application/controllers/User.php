<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class User extends CI_Controller {

    public function __construct() {
        parent::__construct();
        
    }

    public function main() {
        
        $data = array('title' => 'Login', 'content' => 'employee/registration', 'view_data' => $check);
        $this->load->view('template2', $data);
    }

   

}
