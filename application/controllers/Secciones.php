<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Secciones extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('Secciones_m');
		$this->load->model('Categoria_pq');
		$this->load->library(array('ion_auth', 'form_validation'));
		$this->load->helper(array('url', 'language'));

		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

		$this->lang->load('auth');
	}

  public function index()
  {

    $this->load->view('web/head');
    $this->load->view('guest/menu_U');
    $data['secciones'] = $this->Secciones_m->listar_secciones();
    $data['Categorias'] = $this->Categoria_pq->listar_categoria();

    $this->load->view('secciones/v_secciones', $data);
    $this->load->view('guest/footer');
  }

  public function agregar_seccion()
  {

  	$nombre_de_seccion =  $this->input->post('seccion');
  	$tipo_seccion =  $this->input->post('tipo_seccion');
    $id_cp = $this->input->post('id_cp');
    $nivel_seccion = $this->input->post('nivel_seccion');

    $resultado = $this->Secciones_m->agregar_seccion($nombre_de_seccion,$tipo_seccion,$id_cp,$nivel_seccion);

			     if ($resultado== true) {
                               redirect('/Secciones', 'refresh');   

        }
        else {
                     redirect('/Secciones/', 'refresh');   

        }
  }

  //vista detalle de seccion para agregar caracteristicas
  public function detalle($id_seccion)
  {
    $this->load->view('guest/head');
    $this->load->view('guest/menu_U');
      $data = array(
            'id_seccion'  =>   $id_seccion
            );
    $data['detalle_secciones'] = $this->Secciones_m->listar_detalle_seccion($id_seccion);


    $this->load->view('secciones/detalle_seccion',$data);
    $this->load->view('guest/footer');
  }

  //funcion agregar detalles a seccion

  public function agregar_detalles()
  {


	$id_seccion =  $this->input->post('id_seccion');
	$tipo_ds =  $this->input->post('tipo_ds');
	$field_name =  $this->input->post('field_name');

	$resultado = $this->Secciones_m->agregar_detalles($id_seccion,$tipo_ds,$field_name);


if ($resultado== true) {
                               redirect('/Secciones/detalle/'.$id_seccion, 'refresh');   

        }
        else {
                     redirect('/Secciones/detalle/'.$id_seccion, 'refresh');   

        }

  }


}
