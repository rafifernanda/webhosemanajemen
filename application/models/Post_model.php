<?php 
	/**
	 * 
	 */
	class Post_model extends CI_model
	{
		
		public function __construct()
		{
			$this->load->database();
		}

		// FUNCTION GET
		public function get_jhose()
		{
		
			$this->db->order_by('id_jhose', 'ASC');
			$query = $this->db->get('t_jenishose');
			return $query->result_array();
		}

		public function get_khose()
		{
		
			$this->db->order_by('id_khose', 'ASC');
			$query = $this->db->get('t_konfhose');
			return $query->result_array();
		}

		public function get_fitting()
		{
		
			$this->db->order_by('id_fitting', 'ASC');
			$query = $this->db->get('t_fitting');
			return $query->result_array();
		}

		public function get_diameter()
		{
		
			$this->db->order_by('id_diameter', 'ASC');
			$query = $this->db->get('t_diameter');
			return $query->result_array();
		}

		public function get_customer()
		{
		
			$this->db->order_by('id_customer', 'ASC');
			$query = $this->db->get('t_customer');
			return $query->result_array();
		}

		public function get_lokasi()
		{
		
			$this->db->order_by('id_lokasi', 'ASC');
			$query = $this->db->get('t_lokasi');
			return $query->result_array();
		}

		public function get_transaksi()
		{
		
			$this->db->order_by('id_transaksi', 'ASC');
			$query = $this->db->get('t_transaksi');
			return $query->result_array();
		}


		// FUNCTION CREATE
		public function create_hose()
		{
			// $slug = url_title($this->input->post('title'));

			$data = array(
				'id_jhose' => $this->input->post('id_jhose') + '200',
				'nama_hose' => $this->input->post('nama_hose')
			);

			return $this->db->insert('t_jenishose', $data);
		}

		public function create_konf()
		{
			// $slug = url_title($this->input->post('title'));

			$data = array(
				'id_khose' => $this->input->post('id_khose'),
				'nama_khose' => $this->input->post('nama_khose')
			);

			return $this->db->insert('t_konfhose', $data);
		}

		public function create_mfitting()
		{
			// $slug = url_title($this->input->post('title'));

			$data = array(
				'id_fitting' => $this->input->post('id_fitting'),
				'nama_fitting' => $this->input->post('nama_fitting')
			);

			return $this->db->insert('t_fitting', $data);
		}

		public function create_mdiameter()
		{
			// $slug = url_title($this->input->post('title'));

			$data = array(
				'id_diameter' => $this->input->post('id_diameter'),
				'ukuran_diameter' => $this->input->post('ukuran_diameter')
			);

			return $this->db->insert('t_diameter', $data);
		}

		public function create_mcustomer()
		{
			// $slug = url_title($this->input->post('title'));

			$data = array(
				'id_customer' => $this->input->post('id_customer'),
				'nama_customer' => $this->input->post('nama_customer')
			);

			return $this->db->insert('t_customer', $data);
		}

		public function create_mlokasi()
		{
			// $slug = url_title($this->input->post('title'));

			$data = array(
				'id_lokasi' => $this->input->post('id_lokasi'),
				'nama_lokasi' => $this->input->post('nama_lokasi')
			);

			return $this->db->insert('t_lokasi', $data);
		}

		public function create_mtransaction()
		{
			// $slug = url_title($this->input->post('title'));

			$data = array(
				'id_transaksi' => $this->input->post('id_transaksi'),
				'tgl_transaksi' => $this->input->post('tgl_transaksi'),
				'hose_transaksi' => $this->input->post('hose_transaksi'),
				'konf_transaksi' => $this->input->post('konf_transaksi'),
				'diameter' => $this->input->post('diameter'),
				'panjang' => $this->input->post('panjang'),
				'fitting1' => $this->input->post('fitting1'),
				'ukuran1' => $this->input->post('ukuran1'),
				'fitting2' => $this->input->post('fitting2'),
				'ukuran2' => $this->input->post('ukuran2'),
				'pn_unit' => $this->input->post('pn_unit'),
				'aplikasi' => $this->input->post('aplikasi'),
				'customer' => $this->input->post('customer'),
				'pn_assy' => $this->input->post('pn_assy'),
				'lokasi' => $this->input->post('lokasi'),
				'kondisi_transaksi' => $this->input->post('kondisi_transaksi'),
				'lifetime' => $this->input->post('lifetime'),
			);

			return $this->db->insert('t_transaksi', $data);
		}



		// FUNCTION DELETE
		public function delete_jhose($id_jhose)
		{
			$this->db->where('id_jhose', $id_jhose);
			$this->db->delete('t_jenishose');
			return true;
		}

		public function delete_khose($id_khose)
		{
			$this->db->where('id_khose', $id_khose);
			$this->db->delete('t_konfhose');
			return true;
		}

		public function delete_mfitting($id_fitting)
		{
			$this->db->where('id_fitting', $id_fitting);
			$this->db->delete('t_fitting');
			return true;
		}

		public function delete_mdiameter($id_diameter)
		{
			$this->db->where('id_diameter', $id_diameter);
			$this->db->delete('t_diameter');
			return true;
		}

		public function delete_mcustomer($id_customer)
		{
			$this->db->where('id_customer', $id_customer);
			$this->db->delete('t_customer');
			return true;
		}

		public function delete_mlokasi($id_lokasi)
		{
			$this->db->where('id_lokasi', $id_lokasi);
			$this->db->delete('t_lokasi');
			return true;
		}

		public function delete_mtransaksi($id_transaksi)
		{
			$this->db->where('id_transaksi', $id_transaksi);
			$this->db->delete('t_transaksi');
			return true;
		}

		// FUNCTION EDIT

		public function get_edit_jhose($id_jhose){
		$query = $this->db->get_where('t_jenishose', array('id_jhose' => $id_jhose));
			return $query->result_array();
		}

		public function update_jhose()
		{

			$data = array(
				'id_jhose' => $this->input->post('id_jhose'),
				'nama_hose' => $this->input->post('nama_hose')
			);

			$this->db->where('id_jhose', $this->input->post('id_jhose'));
			return $this->db->update('t_jenishose', $data);
		}


		public function get_edit_khose($id_khose){
		$query = $this->db->get_where('t_konfhose', array('id_khose' => $id_khose));
			return $query->result_array();
		}

		public function update_khose()
		{

			$data = array(
				'id_khose' => $this->input->post('id_khose'),
				'nama_khose' => $this->input->post('nama_khose')
			);

			$this->db->where('id_khose', $this->input->post('id_khose'));
			return $this->db->update('t_konfhose', $data);
		}


		public function get_edit_fitting($id_fitting){
		$query = $this->db->get_where('t_fitting', array('id_fitting' => $id_fitting));
			return $query->result_array();
		}

		public function update_fitting()
		{

			$data = array(
				'id_fitting' => $this->input->post('id_fitting'),
				'nama_fitting' => $this->input->post('nama_fitting')
			);

			$this->db->where('id_fitting', $this->input->post('id_fitting'));
			return $this->db->update('t_fitting', $data);
		}


		public function get_edit_diameter($id_diameter){
		$query = $this->db->get_where('t_diameter', array('id_diameter' => $id_diameter));
			return $query->result_array();
		}

		public function update_diameter()
		{

			$data = array(
				'id_diameter' => $this->input->post('id_diameter'),
				'ukuran_diameter' => $this->input->post('ukuran_diameter')
			);

			$this->db->where('id_diameter', $this->input->post('id_diameter'));
			return $this->db->update('t_diameter', $data);
		}


		public function get_edit_customer($id_customer){
		$query = $this->db->get_where('t_customer', array('id_customer' => $id_customer));
			return $query->result_array();
		}

		public function update_customer()
		{

			$data = array(
				'id_customer' => $this->input->post('id_customer'),
				'nama_customer' => $this->input->post('nama_customer')
			);

			$this->db->where('id_customer', $this->input->post('id_customer'));
			return $this->db->update('t_customer', $data);
		}


		public function get_edit_lokasi($id_lokasi){
		$query = $this->db->get_where('t_lokasi', array('id_lokasi' => $id_lokasi));
			return $query->result_array();
		}

		public function update_lokasi()
		{

			$data = array(
				'id_lokasi' => $this->input->post('id_lokasi'),
				'nama_lokasi' => $this->input->post('nama_lokasi')
			);

			$this->db->where('id_lokasi', $this->input->post('id_lokasi'));
			return $this->db->update('t_lokasi', $data);
		}


		public function get_edit_transaksi($id_transaksi){
		$query = $this->db->get_where('t_transaksi', array('id_transaksi' => $id_transaksi));
			return $query->result_array();
		}

		public function update_transaksi()
		{

			$data = array(
				'id_transaksi' => $this->input->post('id_transaksi'),
				'tgl_transaksi' => $this->input->post('tgl_transaksi'),
				'hose_transaksi' => $this->input->post('hose_transaksi'),
				'konf_transaksi' => $this->input->post('konf_transaksi'),
				'diameter' => $this->input->post('diameter'),
				'panjang' => $this->input->post('panjang'),
				'fitting1' => $this->input->post('fitting1'),
				'ukuran1' => $this->input->post('ukuran1'),
				'fitting2' => $this->input->post('fitting2'),
				'ukuran2' => $this->input->post('ukuran2'),
				'pn_unit' => $this->input->post('pn_unit'),
				'aplikasi' => $this->input->post('aplikasi'),
				'customer' => $this->input->post('customer'),
				'pn_assy' => $this->input->post('pn_assy'),
				'lokasi' => $this->input->post('lokasi'),
				'kondisi_transaksi' => $this->input->post('kondisi_transaksi'),
			);

			$this->db->where('id_transaksi', $this->input->post('id_transaksi'));
			return $this->db->update('t_transaksi', $data);
		}

		public function get_profile($username){
		$query = $this->db->get_where('t_login', array('username' => $username));
			return $query->result_array();
		}

		public function get_name($title)
		{
			$this->db->like('nama_hose', $title, 'BOTH');
			$this->db->order_by('id_jhose', 'asc');
			$this->db->limit(10);
			return $this->db->get('t_jenishose')->result();
		}


		function can_login($username, $password)  
      {  
           $this->db->where('username', $username);  
           $this->db->where('password', $password);  
           $query = $this->db->get('t_login');  
           //SELECT * FROM users WHERE username = '$username' AND password = '$password'  
           if($query->num_rows() > 0)  
           {  
                return true;  
           }  
           else  
           {  
                return false;       
           }  
      } 

      // Model Autocomplete Nama Hose
      public function get_autojhose($postData)
      {
      	$response = array();

      	$this->db->select('*');

      	if ($postData['search']) {
      		$this->db->where("nama_hose like '%".$postData['search']."%' ");
      		$result = $this->db->get('t_jenishose')->result();

      		foreach ($result as $row) {
      			$response[] = array("label"=>$row->nama_hose);
      		}
      	}
      	return $response;
      }

      // Model Autocomplete Nama Konfigurasi
      public function get_autokhose($postData)
      {
      	$response = array();

      	$this->db->select('*');

      	if ($postData['search']) {
      		$this->db->where("nama_khose like '%".$postData['search']."%' ");
      		$result = $this->db->get('t_konfhose')->result();

      		foreach ($result as $row) {
      			$response[] = array("label"=>$row->nama_khose);
      		}
      	}
      	return $response;
      }

      // Model Autocomplete Ukuran Diameter
      public function get_autodiameter($postData)
      {
      	$response = array();

      	$this->db->select('*');

      	if ($postData['search']) {
      		$this->db->where("ukuran_diameter like '%".$postData['search']."%' ");
      		$result = $this->db->get('t_diameter')->result();

      		foreach ($result as $row) {
      			$response[] = array("label"=>$row->ukuran_diameter);
      		}
      	}
      	return $response;
      }


      // Model Autocomplete Nama Fitting
      public function get_autofitting($postData)
      {
      	$response = array();

      	$this->db->select('*');

      	if ($postData['search']) {
      		$this->db->where("nama_fitting like '%".$postData['search']."%' ");
      		$result = $this->db->get('t_fitting')->result();

      		foreach ($result as $row) {
      			$response[] = array("label"=>$row->nama_fitting);
      		}
      	}
      	return $response;
      }

      // Model Autocomplete Nama Unit
      public function get_autounit($postData)
      {
      	$response = array();

      	$this->db->select('*');

      	if ($postData['search']) {
      		$this->db->where("nama_unit like '%".$postData['search']."%' ");
      		$result = $this->db->get('t_pnunit')->result();

      		foreach ($result as $row) {
      			$response[] = array("label"=>$row->nama_unit);
      		}
      	}
      	return $response;
      }


      // Model Autocomplete Nama Customer
      public function get_autocustomer($postData)
      {
      	$response = array();

      	$this->db->select('*');

      	if ($postData['search']) {
      		$this->db->where("nama_customer like '%".$postData['search']."%' ");
      		$result = $this->db->get('t_customer')->result();

      		foreach ($result as $row) {
      			$response[] = array("label"=>$row->nama_customer);
      		}
      	}
      	return $response;
      }

      // Model Autocomplete Nama Lokasi
      public function get_autolokasi($postData)
      {
      	$response = array();

      	$this->db->select('*');

      	if ($postData['search']) {
      		$this->db->where("nama_lokasi like '%".$postData['search']."%' ");
      		$result = $this->db->get('t_lokasi')->result();

      		foreach ($result as $row) {
      			$response[] = array("label"=>$row->nama_lokasi);
      		}
      	}
      	return $response;
      }

      public function custom_id()
      {
      	$q = $this->db->query("SELECT max(id_transaksi) as no FROM t_transaksi");
      	return $q->result_array();
      }





		
}
 