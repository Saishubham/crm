<?php
class Payment extends CI_controller{
		public function __construct(){
			parent::__construct();
			$this->load->model('Database_model');
			if($this->session->userdata('user_id')===NULL){ 
			redirect("/login/");
				}
			}
			
			public function index(){
				$data=array();
				$data['title']="Payment";
				$this->load->view('header',$data);
				$this->load->view('nav');
				$this->load->view('payment');
				$this->load->view('footer');
				}
				
				public function get_payment(){
					if($this->input->post('payment')!==NULL){
			$data['ins_amount']=$this->input->post('ins_amount');
			$data['transno']=$this->input->post('transno');				            
			$data['transdate']=$this->input->post('transdate');
			$run=$this->Database_model->insertbyarray("payment",$data);
				if($run===true){
					$msg= "added successfully";
					$arr=array("msg"=>$msg);
					$this->session->set_flashdata($arr);
					redirect("/payment/");
				}
			}
			else{
				redirect("/payment/");
			}
		}

						}
					
			
?>