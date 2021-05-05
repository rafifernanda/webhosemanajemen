<?php
require(APPPATH.'/libraries/REST_Controller.php');
 
class Api extends REST_Controller{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('api_model');
    }
    //API - client sends isbn and on valid isbn book information is sent back
    function getid(){
        $id_transaksi  = $this->get('id_transaksi');
        
        if(!$id_transaksi){
            $this->response("No ID specified", 400);
            exit;
        }
        $result = $this->api_model->api_getid( $id_transaksi );
        if($result){
            $this->response($result, 200); 
            exit;
        } 
        else{
             $this->response("Invalid ID", 404);
            exit;
        }
    } 
    //API -  Fetch All books
    function getdata(){
        $result = $this->api_model->api_getdata();
        if($result){
            $this->response($result, 200); 
        } 
        else{
            $this->response("No record found", 404);
        }
    }
     
    //API - create a new book item in database.
    function createdata(){
         $id_transaksi      = $this->post('id_transaksi');
         $tgl_transaksi     = $this->post('tgl_transaksi');
         $hose_transaksi    = $this->post('hose_transaksi');
         $konf_transaksi    = $this->post('konf_transaksi');
         $diameter          = $this->post('diameter');
         $panjang           = $this->post('panjang');
         $fitting1          = $this->post('fitting1');
         $ukuran1           = $this->post('ukuran1');
         $fitting2          = $this->post('fitting2');
         $ukuran2           = $this->post('ukuran2');
         $pn_unit           = $this->post('pn_unit');
         $aplikasi          = $this->post('aplikasi');
         $customer          = $this->post('customer');
         $pn_assy           = $this->post('pn_assy');
         $lokasi            = $this->post('lokasi');
         $kondisi_transaksi = $this->post('kondisi_transaksi');
        
        
         if(!$hose_transaksi || !$konf_transaksi || !$diameter || !$panjang || !$fitting1 || !$ukuran1 || !$fitting2 || !$ukuran2 || !$pn_unit || !$aplikasi || !$customer || !$pn_assy || !$lokasi || !$kondisi_transaksi){
                $this->response("Enter complete book information to save", 400);
         }else{
            $result = $this->api_model->add(array("hose_transaksi"=>$hose_transaksi, "konf_transaksi"=>$konf_transaksi, "diameter"=>$diameter, "panjang"=>$panjang, "fitting1"=>$fitting1, "ukuran1"=>$ukuran1, "ukuran2"=>$ukuran2, "pn_unit"=>$pn_unit, "aplikasi"=>$aplikasi, "customer"=>$customer, "pn_assy"=>$pn_assy, "lokasi"=>$lokasi, "kondisi_transaksi"=>$kondisi_transaksi));
            if($result === 0){
                $this->response("Book information coild not be saved. Try again.", 404);
            }else{
                $this->response("success", 200);  
           
            }
        }
    }
    
    //API - update a book 
    function updatedata(){
         
         $hose_transaksi    = $this->put('hose_transaksi');
         $konf_transaksi    = $this->put('konf_transaksi');
         $diameter          = $this->put('diameter');
         $panjang           = $this->put('panjang');
         $fitting1          = $this->put('fitting1');
         $ukuran1           = $this->put('ukuran1');
         $fitting2          = $this->put('fitting2');
         $ukuran2           = $this->put('ukuran2');
         $pn_unit           = $this->put('pn_unit');
         $aplikasi          = $this->put('aplikasi');
         $customer          = $this->put('customer');
         $pn_assy           = $this->put('pn_assy');
         $lokasi            = $this->put('lokasi');
         $kondisi_transaksi = $this->put('kondisi_transaksi');
         
         if(!$hose_transaksi || !$konf_transaksi || !$diameter || !$panjang || !$fitting1 || !$ukuran1 || !$fitting2 || !$ukuran2 || !$pn_unit || !$aplikasi || !$customer || !$pn_assy || !$lokasi || !$kondisi_transaksi){
                $this->response("Enter complete book information to save", 400);
         }else{
            $result = $this->api_model->update($id_transaksi, array("hose_transaksi"=>$hose_transaksi, "konf_transaksi"=>$konf_transaksi, "diameter"=>$diameter, "panjang"=>$panjang, "fitting1"=>$fitting1, "ukuran1"=>$ukuran1, "ukuran2"=>$ukuran2, "pn_unit"=>$pn_unit, "aplikasi"=>$aplikasi, "customer"=>$customer, "pn_assy"=>$pn_assy, "lokasi"=>$lokasi, "kondisi_transaksi"=>$kondisi_transaksi));
            if($result === 0){
                $this->response("Book information coild not be saved. Try again.", 404);
            }else{
                $this->response("success", 200);  
            }
        }
    }
    //API - delete a book 
    function deletedata()
    {
        $id_transaksi  = $this->delete('id_transaksi');
        if(!$id_transaksi){
            $this->response("Parameter missing", 404);
        }
         
        if($this->api_model->delete($id_transaksi))
        {
            $this->response("Success", 200);
        } 
        else
        {
            $this->response("Failed", 400);
        }
    }
}