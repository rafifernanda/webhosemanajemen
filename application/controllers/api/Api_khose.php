<?php
   
require APPPATH . 'libraries/REST_Controller.php';
     
class Api_khose extends REST_Controller {
    
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
	public function index_get($id_khose = 0)
	{
        if(!empty($id_khose)){
            $data = $this->db->get_where("t_konfhose", ['id_khose' => $id_khose])->row_array();
        }else{
            $data = $this->db->get("t_konfhose")->result();
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
        $this->db->insert('t_konfhose',$input);
     
        $this->response(['Created successfully.'], REST_Controller::HTTP_OK);
    } 
     
    /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function index_put($id_khose)
    {
        $input = $this->put();
        $this->db->update('t_konfhose', $input, array('id_khose'=>$id_khose));
     
        $this->response(['Updated successfully.'], REST_Controller::HTTP_OK);
    }
     
    /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function index_delete($id_khose)
    {
        $this->db->delete('t_konfhose', array('id_khose'=>$id_khose));
       
        $this->response(['Deleted successfully.'], REST_Controller::HTTP_OK);
    }
    	
}