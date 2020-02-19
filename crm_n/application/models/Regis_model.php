<?php
	class Regis_model extends CI_Model{
		public function insertbyquery($columns,$values){
			$query="INSERT INTO new ($columns) VALUES ($values)";
			//echo $query;
			$run=$this->db->query($query);
			if($run){
				return true;
			}
		}
		
		public function insertbyarray($data){
			$run=$this->db->insert("new",$data);
			if($run){
				return true;
			}
		}
		public function delete($where){
			$run=$this->db->delete("new",$where);
			if($run){
				return true;
			}
		}
		
	
		public function getrows($where="",$limit=""){
			if($where==""){
				$run=$this->db->get("new");
			}
			else{
				$query="SELECT * from new where $where";
				if($limit!=""){$query.=" limit $limit ";}
				$run=$this->db->query($query);
			}
			//$result=$run->result();
			$result=$run->result_array();
			
			return $result;
		}
		public function getcount($where){
			$query="SELECT count(*) as `count` from new where $where";
			$run=$this->db->query($query);
			$result=$run->row_array();
			$count=$result['count'];
			return $count;
		}
		
		public function getsingledata($where){
			$run=$this->db->get_where("new",$where);
			//$result=$run->result();
			$result=$run->row_array();
			
			return $result;
		}
		
		public function update($data,$where){
			$this->db->set($data);
			$this->db->where($where);
			$run=$this->db->update("new");
			if($run){
				return true;
			}
		}
	
	}
	
	
?>