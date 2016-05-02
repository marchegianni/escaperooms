<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Login extends CI_Controller {
 
    function __construct()
    {
        parent::__construct();
    }
 
    function index()
    {
        $this->load->helper(array('form'));
   
        $data['title'] = 'Escape Rooms na Slovensku';
   
        $this->parser->parse('templates/header', $data);
        $this->load->view('pages/home');
        $this->load->view('templates/footer');
    }
 
}
 
?>