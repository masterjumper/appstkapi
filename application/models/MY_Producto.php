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
		$this -> db -> from('producto');
        $this -> db -> order_by('proid', 'ASC');
        $this -> db -> limit(20);

		$query = $this -> db -> get() ->result();
		return $query;
	}

    public function set_proimp($proid, $proimp)
	{
        $data = array(
            'proimp' =>$proimp,
            'profecact'=>date("Y-m-d H:i:s")
        );
        $this -> db -> where('proid', $proid);
        $this -> db -> update('producto', $data);
	}
}

?>