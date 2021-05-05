<?php
  class Api_model extends CI_Model {
       
      public function __construct(){
          
        $this->load->database();
        
      }
      
      //API call - get a book record by isbn
      public function api_getid($id_transaksi){  
           $this->db->select('id_transaksi, tgl_transaksi, hose_transaksi, konf_transaksi, diameter, panjang, fitting1, ukuran1, fitting2, ukuran2, pn_unit, aplikasi, customer, pn_assy, lokasi, kondisi_transaksi');
           $this->db->from('t_transaksi');
           $this->db->where('id_transaksi',$id_transaksi);
           $query = $this->db->get();
           
           if($query->num_rows() == 1)
           {
               return $query->result_array();
           }
           else
           {
             return 0;
          }
      }
    //API call - get all books record
    public function api_getdata(){   
        $this->db->select('id_transaksi, tgl_transaksi, hose_transaksi, konf_transaksi, diameter, panjang, fitting1, ukuran1, fitting2, ukuran2, pn_unit, aplikasi, customer, pn_assy, lokasi, kondisi_transaksi');
        $this->db->from('t_transaksi');
        $this->db->order_by("id_transaksi", "asc"); 
        $query = $this->db->get();
        if($query->num_rows() > 0){
          return $query->result_array();
        }else{
          return 0;
        }
    }
   
   //API call - delete a book record
    public function api_delete($id_transaksi){
       $this->db->where('id_transaksi', $id_transaksi);
       if($this->db->delete('t_transaksi')){
          return true;
        }else{
          return false;
        }
   }
   
   //API call - add new book record
    public function api_create($data){
        if($this->db->insert('t_transaksi', $data)){
           return true;
        }else{
           return false;
        }
    }
    
    //API call - update a book record
    public function api_update($id_transaksi, $data){
       $this->db->where('id_transaksi', $id_transaksi);
       if($this->db->update('t_transaksi', $data)){
          return true;
        }else{
          return false;
        }
    }
}