<?php 
class Paquetes_m extends CI_Model
{
   public function agregar_Paquete($nombre_paquete,$id_cp,$nivel_paquete)
    {
        $data = array(
            'nombre_paquete'  =>   $nombre_paquete,
            'tipo_paquete'  =>   $nivel_paquete,
            'id_cp'  =>   $id_cp
            );
            $this->db->insert('paquetes',$data);
  }

  public function listar_paquetes()
  {

  $query =  $this->db->query("SELECT  paquetes.id_paquete, catergoria_paquete.titulo_cp, catergoria_paquete.id_cp,  paquetes.nombre_paquete FROM paquetes, catergoria_paquete WHERE paquetes.id_cp = catergoria_paquete.id_cp");


        if($query->num_rows() > 0 )
        {
            return $query->result();
        }


  }

  public function lista_paquete($id_paquete)
  {
    $query =  $this->db->query("SELECT catergoria_paquete.titulo_cp ,paquetes.nombre_paquete,paquetes.tipo_paquete FROM paquetes ,catergoria_paquete WHERE paquetes.id_cp = catergoria_paquete.id_cp and id_paquete = ".$id_paquete);

        if($query->num_rows() > 0 )
        {
            return $query->result();
        }
  }
  

}
 ?>