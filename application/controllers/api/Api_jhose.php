<?php
   
require APPPATH . 'libraries/REST_Controller.php';
     
class Api_jhose extends REST_Controller {
    
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
	public function index_get($id_jhose = 0)
	{
         if(!empty($id_jhose)){
             $data = $this->db->get_where("t_jenishose", ['id_jhose' => $id_jhose])->row_array();
         }else{
             $data = $this->db->get("t_jenishose")->result();
         }
     
         $this->response($data, REST_Controller::HTTP_OK);
	}

    // function index_get() {
    //     $id_jhose = $this->get('id_jhose');
    //     if ($id_jhose == '') {
    //         $tracking = $this->db->get('t_jenishose')->result();
    //     } else {
    //         $this->db->where('id_jhose', $id_jhose);
    //         $tracking = $this->db->get('t_jenishose')->result();
    //     }
    //     $this->response($id_jhose, 200);
    // }

    //Masukan function selanjutnya disini


    // public function index_getdata($id_jhose){  
    //        $this->db->select('id_jhose, nama_hose');
    //        $this->db->from('t_jenishose');
    //        $this->db->where('id_jhose',$id_jhose);
    //        $query = $this->db->get();
           
    //        if($query->num_rows() == 1)
    //        {
    //            return $query->result_array();
    //        }
    //        else
    //        {
    //          return 0;
    //       }
    //   }

      
    /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function index_post()
    {
        $input = $this->input->post();
        $this->db->insert('t_jenishose',$input);
     
        $this->response(['Created successfully.'], REST_Controller::HTTP_OK);
    } 
     
    /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function index_put($id_jhose)
    {
        $input = $this->put();
        $this->db->update('t_jenishose', $input, array('id_jhose'=>$id_jhose));
     
        $this->response(['Updated successfully.'], REST_Controller::HTTP_OK);
    }
     
    /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function index_delete($id_jhose)
    {
        $this->db->delete('t_jenishose', array('id_jhose'=>$id_jhose));
       
        $this->response(['Deleted successfully.'], REST_Controller::HTTP_OK);
    }
    	
}