<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class menu extends CI_Controller {


	public function __construct()
    {
		
		parent::__construct();
		//預讀方法
    }

	

	

	public function menu_info(){

 		$this->load->model('menuModel');
	
		$m_p_res = $this->menuModel->get_menu_product();
		
		// echo "<pre>";
     	// var_dump($m_p_res); 
		$data['data']=$m_p_res;

		// var_dump($data);

		// $this->load->model('menuModel');
		// $m_b_res=$this->menuModel->get_menu_banner();
		// echo "<pre>";
     	// var_dump($m_p_res);



		$this->load->view('templates/menu_header');
		$this->load->view('templates/menu_body',$data);
		$this->load->view('templates/menu_footer');

	}


	
	
	

	
}
