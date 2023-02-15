<?php
class MY_Producto extends CI_Model
{
    function fetch_all()
    {
    $this->db->order_by('id', 'DESC');
    return $this->db->get('producto');
    }
    
    public function get_all()
	{
		$this -> db -> select('*');
		$this -> db ->from('producto');
		$query = $this -> db -> get() ->result();
		return $query;
	}
}

?>