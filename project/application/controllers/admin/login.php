<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if($this->session->has_userdata('admin'))
		{
			redirect('admin/Dashboard/user');
		}
		$this->load->model('Admin');
	}

	public function index()
	{	
		$this->load->model('New_model');
		$result=$this->New_model->GetDanhMuc();
		$result=array('category'=>$result);
		$this->load->view('admin/login', $result, FALSE);
		

	}
	public function verify()
	{
		$check=$this->Admin->validate();

		if($check)
		{
			$this->session->set_userdata('admin','1');
			redirect('admin/Dashboard/user');
		}
		else{

			redirect('admin/login');
		}
	}


}

/* End of file login.php */
/* Location: ./application/controllers/login.php */