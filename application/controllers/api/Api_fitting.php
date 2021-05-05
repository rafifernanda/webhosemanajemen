<?php
   
require APPPATH . 'libraries/REST_Controller.php';
     
class Api_fitting extends REST_Controller {
    
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
	public function index_get($id_fitting = 0)
	{
        if(!empty($id_fitting)){
            $data = $this->db->get_where("t_fitting", ['id_fitting' => $id_fitting])->row_array();
        }else{
            $data = $this->db->get("t_fitting")->result();
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
        $this->db->insert('t_fitting',$input);
     
        $this->response(['Created successfully.'], REST_Controller::HTTP_OK);
    } 
     
    /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function index_put($id_diameter)
    {
        $input = $this->put();
        $this->db->update('t_fitting', $input, array('id_fitting'=>$id_fitting));
     
        $this->response(['Updated successfully.'], REST_Controller::HTTP_OK);
    }
     
    /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function index_delete($id_diameter)
    {
        $this->db->delete('t_fitting', array('id_fitting'=>$id_fitting));
       
        $this->response(['Deleted successfully.'], REST_Controller::HTTP_OK);
    }
    	
}