<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *      http://example.com/index.php/welcome
     *  - or -
     *      http://example.com/index.php/welcome/index
     *  - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function __contruct()
    {
        parent::__construct();
        
        //$this->load->helper('form');
        
        //$this->load->library('form_validation');
    }
    
    public function view($page = 'home')
    {
        $this->load->library('form_validation');
        
        if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
        {
                // Whoops, we don't have a page for that!
                show_404();
        }

        if ($page = 'home') {
            $data['title'] = 'Escape Rooms na Slovensku';
        }
        else {
            $data['title'] = ucfirst($page);
        }
        
        $this->parser->parse('templates/header', $data);
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/footer', $data);
    }
}
