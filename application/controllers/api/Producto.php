<?php
   
require APPPATH . 'libraries/REST_Controller.php';
     
class Producto extends REST_Controller {
    
	  /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function __construct() {
       parent::__construct();
       $this->load->database();
       $this -> load ->model('MY_Producto');
    }
       
    /**
     * Get All Data from this method.
     *
     * @return Response
    */
    
    public function index_get()
	{
		//$this->load->view('welcome_message');
        $data = $this->MY_Producto->get_all();
        echo json_encode($data);
        //$this->response($data, REST_Controller::HTTP_OK);
	}

	/* public function index_get($id = 0)
	{
        if(!empty($id)){
            $data = $this->db->get_where("items", ['id' => $id])->row_array();
        }else{
            $data = $this->db->get("items")->result();
        }
     
        $this->response($data, REST_Controller::HTTP_OK);
	} */
      
    /**
     * Get All Data from this method.
     *
     * @return Response
    */
    /* public function index_post()
    {
        $input = $this->input->post();
        $this->db->insert('items',$input);
     
        $this->response(['Item created successfully.'], REST_Controller::HTTP_OK);
    } */ 
     
    /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function index_put($proid, $proimp)
    {        
        $this->MY_Producto->set_proimp($proid, $proimp)
        //$input = $this->put();
        //$this->db->update('items', $input, array('id'=>$id));
     
        $this->response(['Item updated successfully.'], REST_Controller::HTTP_OK);
    } 
     
    /**
     * Get All Data from this method.
     *
     * @return Response
    */
    /* public function index_delete($id)
    {
        $this->db->delete('items', array('id'=>$id));
       
        $this->response(['Item deleted successfully.'], REST_Controller::HTTP_OK);
    } */
    	
}