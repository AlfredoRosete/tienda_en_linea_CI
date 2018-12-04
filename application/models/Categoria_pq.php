<?php 
class Categoria_pq extends CI_Model
{
   public function agregar_categoria($categoria,$descripcion)
    {
        $data = array(
            'titulo_cp'       =>   $categoria,
            'descripcion_cp'  =>   $descripcion
            );
            $this->db->insert('catergoria_paquete',$data);
  }

  public function listar_categoria()
  {
  	 $this->db->select('*')->from('catergoria_paquete');
        $query = $this->db->get();
        if($query->num_rows() > 0 )
        {
            return $query->result();
        }


  }

  

}
 ?>
    

