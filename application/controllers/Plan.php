<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Plan extends CI_Controller {

    public function index()
    {
        $this->load->view('Header');
        $this->load->view('Package');
        $this->load->view('Footer');
    }

}

/* End of file Package.php */
