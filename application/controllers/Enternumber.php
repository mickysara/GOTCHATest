<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Enternumber extends CI_Controller {

    public function index()
    {
        $this->load->view('Header');
        $this->load->view('Enternumber');
        $this->load->view('Footer');
    }

    public function submit()
    {
        $id =  $this->input->post("Method");
        $Money = $this->input->post("NewPoint");
        $old   = $this->input->post("Point");
        $sum   = $this->input->post("sum");
        if($old == null)
        {
            $new = $Money;
        }else{
            $new = $old."+".$Money;
        }
        $newsum = $sum+$Money;
        if($Money != null)
        {
            $this->db->query("UPDATE Lotto SET Money = '$new', Sum = $newsum WHERE id = $id");
            echo json_encode(['status' => 1, 'msg' => 'Susscess']);
        }else{
            echo json_encode(['status' => 0, 'msg' => 'Susscess']);
        }

    }
    public function test()
    {   
        $object = array();
        for ($x = 1; $x <= 100; $x++) 
        {        
            $object[] = array(
            'id'    =>  $x
        );

        }
        $this->db->insert_batch('Lotto', $object);
        
    }

}

/* End of file Enternumber.php */
