<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class TestController extends CI_Controller {

    public function index()
    {
        $this->load->view('Header');
        $this->load->view('Test');
        $this->load->view('Footer');
    }

    public function add_to_cart()
    {
        $data = array(
            'id' => $this->input->post('product_id'), 
            'name' => $this->input->post('product_name'), 
            'price' => $this->input->post('product_price'), 
            'qty' => $this->input->post('quantity'), 
        );
        $this->cart->insert($data);

        echo $this->show_cart(); 
    }

    public function show_cart(){ 
        $output = '';
        $no = 0;
        foreach ($this->cart->contents() as $items) {
            $no++;
            $output .='
                <tr>
                    <td>'.$items['name'].'</td>
                    <td>'.number_format($items['price']).'</td>
                    <td>'.$items['qty'].'</td>
                    <td>'.number_format($items['subtotal']).'</td>
                    <td><button type="button" id="'.$items['rowid'].'" class="romove_cart btn btn-danger btn-sm">Cancel</button></td>
                </tr>
            ';
        }
        $output .= '
            <tr>
                <th colspan="3">Total</th>
                <th colspan="2">'.'Bath '.number_format($this->cart->total()).'</th>
            </tr>
        ';
        return $output;
    }

    function load_cart(){ 
        echo $this->show_cart();
    }
 
    function delete_cart(){ 
        $data = array(
            'rowid' => $this->input->post('row_id'), 
            'qty' => 0, 
        );
        $this->cart->update($data);
        echo $this->show_cart();
    }
}

/* End of file TestController.php */
