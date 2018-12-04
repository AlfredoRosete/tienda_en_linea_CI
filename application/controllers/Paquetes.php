<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paquetes extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
    $this->load->model('Categoria_pq');
    $this->load->model('Paquetes_m');
		$this->load->library(array('ion_auth', 'form_validation'));
		$this->load->helper(array('url', 'language'));

		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

		$this->lang->load('auth');
	}

  public function index()
  {

    $this->load->view('web/head');
    $this->load->view('guest/menu_U');
    $data['Categorias'] = $this->Categoria_pq->listar_categoria();
    $data['Paquetes'] = $this->Paquetes_m->listar_paquetes();
    $this->load->view('paquete/v_paquete',$data);
    $this->load->view('guest/footer');
  }

  //mostrar formulario registrar categoria

 public function V_registrar()
  {
    
    $this->load->view('web/head');
    $this->load->view('guest/menu_U');
    $this->load->view('categoria_pq/form_categoria_pq');
    $this->load->view('guest/footer');
  }


//publicar paquete
  public function Publicar_paquete()
  {
    $nombre_paquete = $this->input->post('nombre_paquete');
    $id_cp = $this->input->post('id_cp');
    $nivel_paquete = $this->input->post('nivel_paquete');
    $resultado = $this->Paquetes_m->agregar_Paquete($nombre_paquete,$id_cp,$nivel_paquete);
     if ($resultado== true) {
                               redirect('/Paquetes/', 'refresh');   

        }
        else {
                     redirect('/Paquetes/', 'refresh');   

        }
  }

//Fucionar vista crear paquete


  public function v_crear_paquete($id_paquete)
  {
    $this->load->view('web/head');
    $this->load->view('guest/menu_U');
    $data['Paquetes'] = $this->Paquetes_m->lista_paquete($id_paquete);
    $this->load->view('paquete/v_paquete_full',$data);
    $this->load->view('guest/footer');
  }

//Registrar datos de formulario registrar categoria

  public function Publicar_categoria_paquete()
  {
    $categoria =  $this->input->post('categoria');
    $descripcion = $this->input->post('descripcion');

    $resultado = $this->Categoria_pq->agregar_categoria($categoria,$descripcion);

			     if ($resultado== true) {
                               redirect('/Paquetes/V_registrar', 'refresh');   

        }
        else {
                     redirect('/Paquetes/', 'refresh');   

        }
  }
  //vista categoria de paquetes
  public function categoria_pq()
  {
  	 $this->load->view('web/head');
    $this->load->view('guest/menu_U');
    $data['Categorias'] = $this->Categoria_pq->listar_categoria();
    $this->load->view('categoria_pq/ls_cp',$data);
    $this->load->view('guest/footer');
  }
 
 


}