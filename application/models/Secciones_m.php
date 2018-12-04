<?php 
class Secciones_m extends CI_Model
{
   public function agregar_seccion($nombre_de_seccion,$tipo_seccion,$id_cp,$nivel_seccion)
    {
        $data = array(
            'nombre_de_seccion'  =>   $nombre_de_seccion,
            'tipo_seccion'  =>   $tipo_seccion,
            'id_cp'  =>   $id_cp,
            'nivel_seccion'  =>   $nivel_seccion
            );
            $this->db->insert('seccion',$data);
  }

  public function listar_secciones()
  {

         $query =  $this->db->query("SELECT catergoria_paquete.titulo_cp , catergoria_paquete.id_cp , seccion.nombre_de_seccion,seccion.tipo_seccion, seccion.nivel_seccion , seccion.id_seccion FROM seccion, catergoria_paquete WHERE seccion.id_cp = catergoria_paquete.id_cp ;");


        if($query->num_rows() > 0 )
        {
            return $query->result();
        }


  }

 public function agregar_detalles($id_seccion,$tipo_ds,$field_name)
 {

  foreach($field_name as $key=>$value) 
    {


    $this->db->query("INSERT INTO detalle_seccion (id_seccion,tipo_ds, elemento) VALUES ('$id_seccion','$tipo_ds', '$field_name[$key]')");
    }

 }
  

  public function listar_detalle_seccion($id_seccion)
  {
    $query =  $this->db->query("SELECT DISTINCT detalle_seccion.elemento ,detalle_seccion.id_seccion,detalle_seccion.tipo_ds FROM seccion, detalle_seccion where detalle_seccion.id_seccion =".$id_seccion );
     if($query->num_rows() > 0 )
        {
            return $query->result();
        }
  }
  

}
 ?>
    

