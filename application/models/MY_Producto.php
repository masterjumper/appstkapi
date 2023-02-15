<?php
class MY_Producto extends CI_Model
{
 function fetch_all()
 {
  $this->db->order_by('id', 'DESC');
  return $this->db->get('producto');
 }
}

?>