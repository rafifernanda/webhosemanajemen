<?php
   
require APPPATH . 'libraries/REST_Controller.php';
     
class Api_transaksi extends REST_Controller {
    
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
	public function index_get($id_transaksi = 0)
	{
        if(!empty($id_transaksi)){
            $data = $this->db->get_where("t_transaksi", ['id_transaksi' => $id_transaksi])->row_array();
        }else{
            $data = $this->db->get("t_transaksi")->result();
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
        $this->db->insert('t_transaksi',$input);
     
        $this->response(['Created successfully.'], REST_Controller::HTTP_OK);
    } 
     
    /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function index_put($id_transaksi)
    {
        $input = $this->put();
        $this->db->update('t_transaksi', $input, array('id_transaksi'=>$id_transaksi));
     
        $this->response(['Updated successfully.'], REST_Controller::HTTP_OK);
    }
     
    /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function index_delete($id_transaksi)
    {
        $this->db->delete('t_transaksi', array('id_transaksi'=>$id_transaksi));
       
        $this->response(['Deleted successfully.'], REST_Controller::HTTP_OK);
    }
    	
}