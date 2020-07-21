<?php

/**
 * 
 */
class Home extends CI_Controller
{
	
	function __construct() {
        parent::__construct();
        
        $this->load->helper('form');
        $this->load->helper('url');
    }

	function index(){
        
        $this->load->view('home');
    }
}
?>