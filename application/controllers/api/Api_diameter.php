<?php
   
require APPPATH . 'libraries/REST_Controller.php';
     
class Api_diameter extends REST_Controller {
    
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
	public function index_get($id_diameter = 0)
	{
        if(!empty($id_diameter)){
            $data = $this->db->get_where("t_diameter", ['id_diameter' => $id_diameter])->row_array();
        }else{
            $data = $this->db->get("t_diameter")->result();
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
        $this->db->insert('t_diameter',$input);
     
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
        $this->db->update('t_diameter', $input, array('id_diameter'=>$id_diameter));
     
        $this->response(['Updated successfully.'], REST_Controller::HTTP_OK);
    }
     
    /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function index_delete($id_diameter)
    {
        $this->db->delete('t_diameter', array('id_diameter'=>$id_diameter));
       
        $this->response(['Deleted successfully.'], REST_Controller::HTTP_OK);
    }
    	
}