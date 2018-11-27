<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {


	public function __construct()
    {
		
		parent::__construct();
		//預讀方法
    }

	

	

	public function index(){

 		$this->load->model('menuModel');
	
		$banner = $this->menuModel->get_banner();
		$m_p_res = $this->menuModel->getMenuList();
		
		// echo "<pre>";
     	// var_dump($m_p_res); 
		$data['data']=$m_p_res;

		// var_dump($data);

		// $this->load->model('menuModel');
		// $m_b_res=$this->menuModel->get_menu_banner();
		// echo "<pre>";
     	// var_dump($m_p_res);



		$this->load->view('templates/menu_header',$banner);
		$this->load->view('templates/menu_body',$data);
		$this->load->view('templates/menu_footer');

	}


	
	
	

	
}
