<?php
   
require APPPATH . 'libraries/REST_Controller.php';
     
class Api_customer extends REST_Controller {
    
	  /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function __construct() {
       parent::__construct();
       $this->load->database();
    }
       
    /**
     * Get All Data from this method.
     *
     * @return Response
    */
	public function index_get($id_customer = 0)
	{
        if(!empty($id_customer)){
            $data = $this->db->get_where("t_customer", ['id_customer' => $id_customer])->row_array();
        }else{
            $data = $this->db->get("t_customer")->result();
        }
     
        $this->response($data, REST_Controller::HTTP_OK);
	}
      
    /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function index_post()
    {
        $input = $this->input->post();
        $this->db->insert('t_customer',$input);
     
        $this->response(['Created successfully.'], REST_Controller::HTTP_OK);
    } 
     
    /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function index_put($id_customer)
    {
        $input = $this->put();
        $this->db->update('t_customer', $input, array('id_customer'=>$id_customer));
     
        $this->response(['Updated successfully.'], REST_Controller::HTTP_OK);
    }
     
    /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function index_delete($id_customer)
    {
        $this->db->delete('t_customer', array('id_customer'=>$id_customer));
       
        $this->response(['Deleted successfully.'], REST_Controller::HTTP_OK);
    }
    	
}