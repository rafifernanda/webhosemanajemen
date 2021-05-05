<?php

/**
 * 
 */
class Posts extends CI_Controller
{

	public function __construct()
    {
        parent::__construct();
        $this->load->model('post_model');
        $this->load->helper(array('url', 'download'));
        $this->load->library('zip');
        // $this->load->library('cqrcode');

    }

    public function index()
		{
			
			$data['title'] = "Latest Posts";

			// $data['posts'] = $this->post_model->get_posts();

			$this->load->view('templates/header');
			$this->load->view('posts/home', $data);
			$this->load->view('templates/footer');
			// $data['judul'] = "Patria";
			// $this->load->view('pages/about',$data);
		}

	public function profile()
	{
		$data['title'] = "Profile";
		$data['user'] = $this->session->userdata('username');


			// $data['posts'] = $this->post_model->get_posts();

			$this->load->view('templates/header', $data);
			$this->load->view('pages/profile', $data);
			$this->load->view('templates/footer');
	}

	
	// FUNCTION CREATE

	public function create_controller_jhose()
		{
			$data['title'] = 'Jenis Hose';
			$data['posts'] = $this->post_model->get_jhose();
			$data['user'] = $this->session->userdata('username');
			


			$this->form_validation->set_rules('id_jhose', 'ID', 'required');
			$this->form_validation->set_rules('nama_hose', 'Nama', 'required');

			if ($this->form_validation->run() === FALSE){
				$this->load->view('templates/header', $data);
				$this->load->view('posts/create_jhose', $data);
				$this->load->view('templates/footer');
			} else {
				$this->post_model->create_hose();
				redirect('posts/create_controller_jhose');
			}
				
			
		}

	public function create_controller_khose()
		{
			$data['title'] = 'Konfigurasi Hose';
			$data['posts'] = $this->post_model->get_khose();
			$data['user'] = $this->session->userdata('username');

			$this->form_validation->set_rules('id_khose', 'ID', 'required');
			$this->form_validation->set_rules('nama_khose', 'Nama', 'required');

			if ($this->form_validation->run() === FALSE){
				$this->load->view('templates/header', $data);
				$this->load->view('posts/create_khose', $data);
				$this->load->view('templates/footer');
			} else {
				$this->post_model->create_konf();
				redirect('posts/create_controller_khose');
			}
				
			
		}

	public function create_controller_fitting()
		{
			$data['title'] = 'Jenis Fitting';
			$data['posts'] = $this->post_model->get_fitting();
			$data['user'] = $this->session->userdata('username');

			$this->form_validation->set_rules('id_fitting', 'ID', 'required');
			$this->form_validation->set_rules('nama_fitting', 'Nama', 'required');

			if ($this->form_validation->run() === FALSE){
				$this->load->view('templates/header', $data);
				$this->load->view('posts/create_fitting', $data);
				$this->load->view('templates/footer');
			} else {
				$this->post_model->create_mfitting();
				redirect('posts/create_controller_fitting');
			}
				
			
		}

	public function create_controller_diameter()
		{
			$data['title'] = 'Diameter Hose';
			$data['posts'] = $this->post_model->get_diameter();
			$data['user'] = $this->session->userdata('username');

			$this->form_validation->set_rules('id_diameter', 'ID', 'required');
			$this->form_validation->set_rules('ukuran_diameter', 'Ukuran', 'required');

			if ($this->form_validation->run() === FALSE){
				$this->load->view('templates/header', $data);
				$this->load->view('posts/create_diameter', $data);
				$this->load->view('templates/footer');
			} else {
				$this->post_model->create_mdiameter();
				redirect('posts/create_controller_diameter');
			}
				
			
		}

	public function create_controller_customer()
		{
			$data['title'] = 'Data Customer';
			$data['posts'] = $this->post_model->get_customer();
			$data['user'] = $this->session->userdata('username');

			$this->form_validation->set_rules('id_customer', 'ID', 'required');
			$this->form_validation->set_rules('nama_customer', 'Nama', 'required');

			if ($this->form_validation->run() === FALSE){
				$this->load->view('templates/header', $data);
				$this->load->view('posts/create_customer', $data);
				$this->load->view('templates/footer');
			} else {
				$this->post_model->create_mcustomer();
				redirect('posts/create_controller_customer');
			}
				
			
		}

	public function create_controller_lokasi()
		{
			$data['title'] = 'Lokasi';
			$data['posts'] = $this->post_model->get_lokasi();
			$data['user'] = $this->session->userdata('username');

			$this->form_validation->set_rules('id_lokasi', 'ID', 'required');
			$this->form_validation->set_rules('nama_lokasi', 'Nama', 'required');

			if ($this->form_validation->run() === FALSE){
				$this->load->view('templates/header', $data);
				$this->load->view('posts/create_lokasi', $data);
				$this->load->view('templates/footer');
			} else {
				$this->post_model->create_mlokasi();
				redirect('posts/create_controller_lokasi');
			}
				
			
		}

	public function create_controller_transaksi()
		{

			$data['user'] = $this->session->userdata('username');

			$data['title'] = 'Data Transaksi';

			$tgl = date('Ymd');
			$custom = "HT".$tgl;
			$cus_id = $this ->post_model->custom_id();
			foreach ($cus_id as $key) {
				$delfront = substr($key['no'],10);

				$no = ((int)$delfront+1);
			}
			$data['cus_id'] = $custom.str_pad($no,4,"0", STR_PAD_LEFT);

			// $this->db->select('*');
			// $this->db->from('t_jenishose');
			// $data['jhose'] = $this->db->get()->result();

			// $this->db->select('*');
			// $this->db->from('t_konfhose');
			// $data['khose'] = $this->db->get()->result();

			// $this->db->select('*');
			// $this->db->from('t_diameter');
			// $data['diameter'] = $this->db->get()->result();

			// $this->db->select('*');
			// $this->db->from('t_fitting');
			// $data['fitting'] = $this->db->get()->result();

			// $this->db->select('*');
			// $this->db->from('t_customer');
			// $data['customer'] = $this->db->get()->result();

			// $this->db->select('*');
			// $this->db->from('t_lokasi');
			// $data['lokasi'] = $this->db->get()->result();

			// $this->db->select('*');
			// $this->db->from('t_kondisi');
			// $data['kondisi'] = $this->db->get()->result();
        

			$this->form_validation->set_rules('id_transaksi', 'ID', 'required');
			$this->form_validation->set_rules('hose_transaksi', 'Jenis Hose', 'required');
			$this->form_validation->set_rules('konf_transaksi', 'Konfigurasi', 'required');
			$this->form_validation->set_rules('diameter', 'Diameter', 'required');
			$this->form_validation->set_rules('panjang', 'Panjang Hose', 'required');
			$this->form_validation->set_rules('fitting1', 'Fitting 1', 'required');
			$this->form_validation->set_rules('ukuran1', 'Ukuran Fitting 1', 'required');
			$this->form_validation->set_rules('fitting2', 'Fitting 2', 'required');
			$this->form_validation->set_rules('ukuran2', 'Ukuran Fitting 2', 'required');
			$this->form_validation->set_rules('pn_unit', 'Product Number Unit', 'required');
			$this->form_validation->set_rules('aplikasi', 'Aplikasi', 'required');
			$this->form_validation->set_rules('customer', 'Customer', 'required');
			$this->form_validation->set_rules('pn_assy', 'Product Number Assembly', 'required');
			$this->form_validation->set_rules('lokasi', 'Lokasi', 'required');
			$this->form_validation->set_rules('kondisi_transaksi', 'Kondisi', 'required');
			$this->form_validation->set_rules('lifetime', 'lifetime', 'required');


			if ($this->form_validation->run() === FALSE){
				$this->load->view('templates/header', $data);
				$this->load->view('posts/create_transaksi', $data);
				$this->load->view('templates/footer');
			} else {
				$this->post_model->create_mtransaction();
				redirect('posts/data_transaksi');
			}		
			
		}

	// END of FUNCTION CREATE




	public function data_transaksi()
		{
				$data['user'] = $this->session->userdata('username');
				$data['title'] = 'Data Transaksi';
				$data['posts'] = $this->post_model->get_transaksi();

				$this->load->view('templates/header', $data);
				$this->load->view('posts/data_transaksi', $data);
				$this->load->view('templates/footer');

		}


	// FUNCTION DELETE

	public function delete_jenishose($id_jhose)
		{
			$this->post_model->delete_jhose($id_jhose);
			redirect('posts/create_controller_jhose');
		}

	public function delete_konfhose($id_khose)
		{
			$this->post_model->delete_khose($id_khose);
			redirect('posts/create_controller_khose');
		}

	public function delete_fitting($id_fitting)
		{
			$this->post_model->delete_mfitting($id_fitting);
			redirect('posts/create_controller_fitting');
		}

	public function delete_diameter($id_diameter)
		{
			$this->post_model->delete_mdiameter($id_diameter);
			redirect('posts/create_controller_diameter');
		}

	public function delete_customer($id_customer)
		{
			$this->post_model->delete_mcustomer($id_customer);
			redirect('posts/create_controller_customer');
		}

	public function delete_lokasi($id_lokasi)
		{
			$this->post_model->delete_mlokasi($id_lokasi);
			redirect('posts/create_controller_lokasi');
		}

	public function delete_transaksi($id_transaksi)
		{
			$this->post_model->delete_mtransaksi($id_transaksi);
			redirect('posts/data_transaksi');
		}

	// END of FUNCTION DELETE



	// Controller Edit Jenis Hose

	public function edit_jhose($id_jhose)
		{
			
			$data['posts'] = $this->post_model->get_edit_jhose($id_jhose);
			$data['user'] = $this->session->userdata('username');

			if (empty($data['posts'])) {
				show_404();
			}
			$data['title'] = 'Edit Jenis Hose';

			$this->load->view('templates/header', $data);
			$this->load->view('posts/edit_jhose', $data);
			$this->load->view('templates/footer');
		}


	public function update_jhose()
		{
			$this->post_model->update_jhose();
			redirect('posts/create_controller_jhose');
		}

	// END of Controller Edit Jenis Hose


	// Controller Edit Konfigurasi Hose

	public function edit_khose($id_khose)
		{
			
			$data['posts'] = $this->post_model->get_edit_khose($id_khose);
			$data['user'] = $this->session->userdata('username');

			if (empty($data['posts'])) {
				show_404();
			}
			$data['title'] = 'Edit Post';

			$this->load->view('templates/header', $data);
			$this->load->view('posts/edit_khose', $data);
			$this->load->view('templates/footer');
		}

	public function update_khose()
		{
			$this->post_model->update_khose();
			redirect('posts/create_controller_khose');
		}

	// END of Controller Edit Konfigurasi Jenis Hose

	// Controller Edit Fitting

	public function edit_fitting($id_fitting)
		{
			
			$data['posts'] = $this->post_model->get_edit_fitting($id_fitting);
			$data['user'] = $this->session->userdata('username');

			if (empty($data['posts'])) {
				show_404();
			}
			$data['title'] = 'Edit Fitting';

			$this->load->view('templates/header', $data);
			$this->load->view('posts/edit_fitting', $data);
			$this->load->view('templates/footer');
		}

	public function update_fitting()
		{
			$this->post_model->update_fitting();
			redirect('posts/create_controller_fitting');
		}

	// END of Controller Edit Fitting

	// Controller Edit Diameter

	public function edit_diameter($id_diameter)
		{
			
			$data['posts'] = $this->post_model->get_edit_diameter($id_diameter);
			$data['user'] = $this->session->userdata('username');

			if (empty($data['posts'])) {
				show_404();
			}
			$data['title'] = 'Edit Diameter';

			$this->load->view('templates/header', $data);
			$this->load->view('posts/edit_diameter', $data);
			$this->load->view('templates/footer');
		}

	public function update_diameter()
		{
			$this->post_model->update_diameter();
			redirect('posts/create_controller_diameter');
		}

	// END of Controller Edit Diameter


	// Controller Edit Customer

	public function edit_customer($id_customer)
		{
			
			$data['posts'] = $this->post_model->get_edit_customer($id_customer);
			$data['user'] = $this->session->userdata('username');

			if (empty($data['posts'])) {
				show_404();
			}
			$data['title'] = 'Edit Customer';

			$this->load->view('templates/header', $data);
			$this->load->view('posts/edit_customer', $data);
			$this->load->view('templates/footer');
		}

	public function update_customer()
		{
			$this->post_model->update_customer();
			redirect('posts/create_controller_customer');
		}

	// END of Controller Edit Customer


	// Controller Edit Lokasi

	public function edit_lokasi($id_lokasi)
		{
			
			$data['posts'] = $this->post_model->get_edit_lokasi($id_lokasi);
			$data['user'] = $this->session->userdata('username');

			if (empty($data['posts'])) {
				show_404();
			}
			$data['title'] = 'Edit Lokasi';

			$this->load->view('templates/header', $data);
			$this->load->view('posts/edit_lokasi', $data);
			$this->load->view('templates/footer');
		}

	public function update_lokasi()
		{
			$this->post_model->update_lokasi();
			redirect('posts/create_controller_lokasi');
		}

	// END of Controller Edit Lokasi


	// Controller Edit Transaksi

	public function edit_transaksi($id_transaksi)
		{

			$data['user'] = $this->session->userdata('username');
			
			$this->db->select('*');
			$this->db->from('t_jenishose');
			$data['jhose'] = $this->db->get()->result();

			$this->db->select('*');
			$this->db->from('t_konfhose');
			$data['khose'] = $this->db->get()->result();

			$this->db->select('*');
			$this->db->from('t_diameter');
			$data['diameter'] = $this->db->get()->result();

			$this->db->select('*');
			$this->db->from('t_fitting');
			$data['fitting'] = $this->db->get()->result();

			$this->db->select('*');
			$this->db->from('t_customer');
			$data['customer'] = $this->db->get()->result();

			$this->db->select('*');
			$this->db->from('t_lokasi');
			$data['lokasi'] = $this->db->get()->result();

			$this->db->select('*');
			$this->db->from('t_kondisi');
			$data['kondisi'] = $this->db->get()->result();

			$this->db->select('*');
			$this->db->from('t_transaksi');
			$data['transaksi'] = $this->db->get()->result();

			$data['posts'] = $this->post_model->get_edit_transaksi($id_transaksi);

			if (empty($data['posts'])) {
				show_404();
			}
			$data['title'] = 'Edit Transaksi';

			$this->load->view('templates/header', $data);
			$this->load->view('posts/edit_transaksi', $data);
			$this->load->view('templates/footer');
		}

	public function update_transaksi()
		{
			$this->post_model->update_transaksi();
			redirect('posts/data_transaksi');
		}



	// END of Controller Edit Transaksi



	public function test()
	{
		$data['title'] = 'Test';

		$this->db->select('*');
		$this->db->from('t_jenishose');
		$data['jhose'] = $this->db->get()->result();

		$this->load->view('templates/header');
		$this->load->view('posts/test', $data);
		$this->load->view('templates/footer');


	}

	public function login()
	{
		$data['title'] = 'Test';

		// $this->load->view('templates/header');
		$this->load->view('posts/login', $data);
		// $this->load->view('templates/footer');

	}
      function login_validation()  
      {  
           $this->load->library('form_validation');  
           $this->form_validation->set_rules('username', 'Username', 'required');  
           $this->form_validation->set_rules('password', 'Password', 'required');  
           if($this->form_validation->run())  
           {  
                //true  
                $username = $this->input->post('username');  
                $password = $this->input->post('password');  
                //model function  
                $this->load->model('post_model');  
                if($this->post_model->can_login($username, $password))  
                {  
                     $session_data = array(  
                          'username'     =>     $username  
                     );  
                     $this->session->set_userdata($session_data);  
                     redirect(base_url() . 'posts/enter');  
                }  
                else  
                {  
                     $this->session->set_flashdata('error', 'Invalid Username and Password');  
                     redirect(base_url() . '');  
                }  
           }  
           else  
           {  
                //false  
                $this->login();  
           }  
      }  
      function enter(){ 
           	if($this->session->userdata('username') != '')  
           	{  
                // echo '<h2>Welcome - '.$this->session->userdata('username').'</h2>';  
                // echo '<label><a href="'.base_url().'posts/logout">Logout</a></label>'; 

           	$data['user'] = $this->session->userdata('username');

            $this->load->view('templates/header', $data);
			$this->load->view('pages/home');
			$this->load->view('templates/footer'); 
           }  
           else  
           {  
                redirect(base_url() . '');  
           }  
           
      }  
      function logout()  
      {  
           $this->session->unset_userdata('username');  
           redirect(base_url() . '');  
      }


      function testapi()
      {
      	$query=$this->db->query('select * from t_jenishose');
      	echo json_encode($query->result());
      }

      // Controller Autocomplete Nama Hose
      public function userdata_jhose()
      {
      	$postData = $this->input->post();
      	$data = $this->post_model->get_autojhose($postData);
      	echo json_encode($data);
      }

      // Controller Autocomplete Nama Konfigurasi
      public function userdata_khose()
      {
      	$postData = $this->input->post();
      	$data = $this->post_model->get_autokhose($postData);
      	echo json_encode($data);
      }

      // Controller Autocomplete Ukuran Diameter
      public function userdata_diameter()
      {
      	$postData = $this->input->post();
      	$data = $this->post_model->get_autodiameter($postData);
      	echo json_encode($data);
      }

      // Controller Autocomplete Nama Fitting
      public function userdata_fitting()
      {
      	$postData = $this->input->post();
      	$data = $this->post_model->get_autofitting($postData);
      	echo json_encode($data);
      }

      // Controller Autocomplete Nama Unit
      public function userdata_unit()
      {
      	$postData = $this->input->post();
      	$data = $this->post_model->get_autounit($postData);
      	echo json_encode($data);
      }

      // Controller Autocomplete Nama Customer
      public function userdata_customer()
      {
      	$postData = $this->input->post();
      	$data = $this->post_model->get_autocustomer($postData);
      	echo json_encode($data);
      }

      // Controller Autocomplete Nama Lokasi
      public function userdata_lokasi()
      {
      	$postData = $this->input->post();
      	$data = $this->post_model->get_autolokasi($postData);
      	echo json_encode($data);
      }

      public function download()
      {	
		force_download('assets/HoseTracking.apk',NULL);

		redirect('posts/enter');
	}

	public function print($id_transaksi)
		{
			
			$data['posts'] = $this->post_model->get_edit_transaksi($id_transaksi);
			$data['user'] = $this->session->userdata('username');

			if (empty($data['posts'])) {
				show_404();
			}
			$this->load->view('posts/print', $data);
		}	

	// public function qrcode()
	// {
	// 	include_once APPPATH . 'vendor/autoload.php';

	// 	$qrCode = new Endroid\QrCode\QrCode('HT202005080001');
	// 	$qrCode->writeFile('generate/qrcode/item.png');
	// }

     

}