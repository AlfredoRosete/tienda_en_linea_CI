<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

  public function index()
  {

    $this->load->view('guest/head');
      $result = $this->db->query("SELECT p.id_product, p.name, p.price,p.description, ci.quantity FROM product p LEFT JOIN orders ci ON p.id_product = ci.id_product  ORDER BY p.name");
    

      $data = array('consulta' => $result );

    $this->load->view('pag_principal',$data );
    $this->load->view('guest/footer');
  }
}
