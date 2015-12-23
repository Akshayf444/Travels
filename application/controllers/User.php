<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class User extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $data = array('title' => 'Main', 'content' => 'User/Main', 'view_data' => 'blank');
        $this->load->view('template2', $data);
    }
    
    public function SearchResult(){
        $data = array('title' => 'Search', 'content' => 'User/SearchResult', 'view_data' => 'blank');
        $this->load->view('template2', $data);
    }

}
