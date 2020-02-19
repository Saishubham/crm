<?php
class Regt extends CI_controller{
		public function __construct(){
			parent::__construct();
			$this->load->model('Database_model');
			if($this->session->userdata('user_id')===NULL){ 
			redirect("/login/");
				}
			}
			
			public function index(){
				$data=array();
				$data['title']="New Registration";
				$this->load->view('header',$data);
				$this->load->view('nav');
				$this->load->view('regis');
				$this->load->view('footer');
				}
				
				
			public function new_register(){
			if($this->input->post('register')!==NULL){
			$data['cname']=$this->input->post('cname');
			$data['caddress']=$this->input->post('caddress');				            
			$data['city']=$this->input->post('city');
			$data['state']=$this->input->post('state');
			$data['cphone']=$this->input->post('cphone');
			$data['gname']=$this->input->post('gname');
			$data['gaddress']=$this->input->post('gaddress');
			$data['gcity']=$this->input->post('gcity');
			$data['gstate']=$this->input->post('gstate');
			$data['gphone']=$this->input->post('gphone');
			$data['fin_amount']=$this->input->post('fin_amount');
			$data['insamount']=$this->input->post('insamount');
			$data['insdate']=$this->input->post('insdate');
			$data['insnum']=$this->input->post('insnum');
			$data['percentage']=$this->input->post('percentage');
			$run=$this->Database_model->insertbyarray("new",$data);
				if($run===true){
					//$user_id=$this->input->('id');
					//$_SESSION["userId"]=$id;	
					$cphone=$this->input->post('cphone');
					$where="`cphone`='$cphone'";
					$getpid=$this->Database_model->getlastdata("new",$where);
					$pid=$getpid['id'];
					$msg="<div class='alert alert-success'><strong>Record Added Sucessfully Your ID IS'$pid' </strong></div>";
					$arr=array("msg"=>$msg);
					$this->session->set_flashdata($arr);
					redirect("/regt/");
				}
			}
			else{
				redirect("/regt/");
			}
		}
		public function editcustomer(){
			$table="new";
			$id=$this->uri->segment(3);
			$where=array("id"=>$id);
			$regt=$this->Database_model->getsingledata($table,$where);
			$this->load->model('Database_model');
			$depts=$this->Database_model->getrows($table,$where="");
			$data=array();
			$data['title']="update info";
			$data['regt']=$regt;
			$this->load->view('header',$data);
			$this->load->view('nav');
			$this->load->view('editcustomer',$data);
			$this->load->view('footer');
		}
		
		public function updateinfo(){
			if($this->input->post('updateinfo')!==NULL){
			$data['cname']=$this->input->post('cname');
			$data['caddress']=$this->input->post('caddress');				            
			$data['city']=$this->input->post('city');
			$data['state']=$this->input->post('state');
			$data['cphone']=$this->input->post('cphone');
			//$data['gname']=$this->input->post('gname');
			$data['gaddress']=$this->input->post('gaddress');
			//$data['gstate']=$this->input->post('gstate');
			//$data['gphone']=$this->input->post('gphone');
			//$data['fin_amount']=$this->input->post('fin_amount');
			//$data['insamount']=$this->input->post('insamount');
			//$data['insdate']=$this->input->post('insdate');
			//$where=array("id='$id'");
			$id=$this->input->post('id');	
			$where=array("id"=>$id);
			$run=$this->Database_model->update("new",$data,$where);
				if($run===true){
					//$cphone1=$data[cphone];
					//$data1['cphone']=cphone;
					$data1['cphone']=$this->input->post('cphone');
					$data1['caddress']=$this->input->post('caddress');		
					$where=array("user_id"=>$id);
					$reg=$this->Database_model->update("payment",$data1,$where);
					$msg= "<div class='alert alert-info'><strong>Record Updated Sucessfully</strong></div>";
					$arr=array("msg"=>$msg);
					$this->session->set_flashdata($arr);
					redirect("/regt/");
				}
			}
			else{
				redirect("/regt/");
			}
		}
			
			public function customerlist(){
			$data=array();
			$data['title']="Customer-List";
			$count=8;
			if($this->uri->segment('4')){ $page=$this->uri->segment('4'); }
			else{
				 $page=1; 
			}
			$offset=($page-1)*$count;
			$limit="$offset,$count";
			$pagefilters=array();
			$table="new";
			$where=1;
			$query="";
				$pagefilters['query']=$query;
			
			if($this->input->get('query')!=NULL){
				$query=trim($this->input->get('query'));
				$where.=" and (cphone ='$query' or id ='$query')";
			}
			$array=$this->Database_model->getrows($table,$where,$limit);
			$rowcount=$this->Database_model->getcount($table,$where);
			$pages=ceil($rowcount/$count);
			$data['array']=$array;
			$data['query']=$query;
			$data['pages']=$pages;
			$data['pagefilters']=$pagefilters;
			$this->load->library('paging');
			$url=base_url()."index.php/regt/customerlist/";
			$paging=$this->paging->createpaging($url,$pages,$pagefilters);
			$data['paging']=$paging;
			$this->load->view('header',$data);
			$this->load->view('nav');
			$this->load->view('customerlist',$data);
			$this->load->view('footer');
		
			}
					}
					
			
?>