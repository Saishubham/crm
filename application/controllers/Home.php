<?php
	class Home extends CI_Controller{
		public function index(){		
			if($this->session->userdata('user_id')===NULL){ redirect("/login/"); }	
			$data=array();
			$data['title']="Home";
			$this->load->view('header',$data);
			$this->load->view('nav');
			$this->load->view('home');
			$this->load->view('footer');
		}
	
	
	}

?>