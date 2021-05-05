<?php
   
require APPPATH . 'libraries/REST_Controller.php';
     
class Api_login extends REST_Controller {
    
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
	public function index_get($username = 0)
	{
        if(!empty($username)){
            $data = $this->db->get_where("t_login", ['username' => $username])->row_array();
        }else{
            $data = $this->db->get("t_login")->result();
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
        $this->db->insert('t_login',$input);
     
        $this->response(['Created successfully.'], REST_Controller::HTTP_OK);
    } 
     
    /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function index_put($username)
    {
        $input = $this->put();
        $this->db->update('t_login', $input, array('username'=>$username));
     
        $this->response(['Updated successfully.'], REST_Controller::HTTP_OK);
    }
     
    /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function index_delete($username)
    {
        $this->db->delete('t_login', array('username'=>$username));
       
        $this->response(['Deleted successfully.'], REST_Controller::HTTP_OK);
    }
    	
}