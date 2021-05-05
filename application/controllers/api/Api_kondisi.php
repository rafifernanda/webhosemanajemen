<?php
   
require APPPATH . 'libraries/REST_Controller.php';
     
class Api_kondisi extends REST_Controller {
    
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
	public function index_get($id_kondisi = 0)
	{
        if(!empty($id_kondisi)){
            $data = $this->db->get_where("t_kondisi", ['id_kondisi' => $id_kondisi])->row_array();
        }else{
            $data = $this->db->get("t_kondisi")->result();
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
        $this->db->insert('t_kondisi',$input);
     
        $this->response(['Created successfully.'], REST_Controller::HTTP_OK);
    } 
     
    /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function index_put($id_kondisi)
    {
        $input = $this->put();
        $this->db->update('t_kondisi', $input, array('id_kondisi'=>$id_kondisi));
     
        $this->response(['Updated successfully.'], REST_Controller::HTTP_OK);
    }
     
    /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function index_delete($id_kondisi)
    {
        $this->db->delete('t_kondisi', array('id_kondisi'=>$id_kondisi));
       
        $this->response(['Deleted successfully.'], REST_Controller::HTTP_OK);
    }
    	
}