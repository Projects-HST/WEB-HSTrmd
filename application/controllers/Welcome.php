<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


		function __construct() {
			 parent::__construct();


			    $this->load->helper('url');
			    $this->load->library('session');
					$this->load->model('centermodel');
	 }



	public function index()
	{
		$this->load->view('index');
	}
	public function about()
	{
		$this->load->view('aboutus');
	}
	public function contact()
	{
		$this->load->view('contacts');
	}

	public function architecture()
	{
		$datas['res']=$this->centermodel->get_architecture();
		$this->load->view('architecture',$datas);
	}
	public function interiors()
	{
	
		$datas['res']=$this->centermodel->get_interiors();
		$this->load->view('interiors',$datas);
	}
	public function project_details($id)
	{


		$datas['res_details']=$this->centermodel->get_project_details($id);
		$datas['res_gallery']=$this->centermodel->get_project_gallery($id);
		$this->load->view('project_header');
		$this->load->view('project_details',$datas);
		$this->load->view('project_footer');
	}
}
