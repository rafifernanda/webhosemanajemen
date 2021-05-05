<?php
   
require APPPATH . 'libraries/REST_Controller.php';
     
class Api_lokasi extends REST_Controller {
    
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
	public function index_get($id_lokasi = 0)
	{
        if(!empty($id_lokasi)){
            $data = $this->db->get_where("t_lokasi", ['id_lokasi' => $id_lokasi])->row_array();
        }else{
            $data = $this->db->get("t_lokasi")->result();
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
        $this->db->insert('t_lokasi',$input);
     
        $this->response(['Created successfully.'], REST_Controller::HTTP_OK);
    } 
     
    /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function index_put($id_lokasi)
    {
        $input = $this->put();
        $this->db->update('t_lokasi', $input, array('id_lokasi'=>$id_lokasi));
     
        $this->response(['Updated successfully.'], REST_Controller::HTTP_OK);
    }
     
    /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function index_delete($id_lokasi)
    {
        $this->db->delete('t_lokasi', array('id_lokasi'=>$id_lokasi));
       
        $this->response(['Deleted successfully.'], REST_Controller::HTTP_OK);
    }
    	
}