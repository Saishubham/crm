<?php
	class Database_model extends CI_Model{
		public function insertbyquery($table,$columns,$values){
			$query="INSERT INTO $table ($columns) VALUES ($values)";
			//echo $query;
			$run=$this->db->query($query);
			if($run){
				return true;
			}
		}
		public function selectbyquery($table,$values){
			$query="SELECT * FROM payment WHERE paydate = NOW()+1days";
			//echo $query;
			$run=$this->db->query($query);
			if($run){
				return true;
			}
		}
		
		public function insertbyarray($table,$data){
			$run=$this->db->insert($table,$data);
			if($run){
				return true;
			}
		}
		public function delete($table,$where){
			$run=$this->db->delete($table,$where);
			if($run){
				return true;
			}
		}
		
	
		public function getrows($table,$where="",$limit=""){
			if($where==""){
				$run=$this->db->get($table);
			}
			else{
				$query="SELECT * from $table where $where";
				if($limit!=""){$query.=" limit $limit ";}
				$run=$this->db->query($query);
			}
			//$result=$run->result();
			$result=$run->result_array();
			
			return $result;
		}
		public function getcount($table,$where){
			$query="SELECT count(*) as `count` from $table where $where";
			$run=$this->db->query($query);
			$result=$run->row_array();
			$count=$result['count'];
			return $count;
		}
		
		public function getsingledata($table,$where){
			$run=$this->db->get_where($table,$where);
			//$result=$run->result();
			$result=$run->row_array();
			
			return $result;
		}
		
		public function getlastdata($table,$where){
			$query="SELECT * from $table where $where order by `id` desc limit 1";
			$run=$this->db->query($query);
			$result=$run->row_array();
			return $result;
		}
		
		public function update($table,$data,$where){
			$this->db->set($data);
			$this->db->where($where);
			$run=$this->db->update($table);
			if($run){
				return true;
			}
		}
	
	}
	//UPDATE `new` SET `insdate`=DATE_ADD(`insdate`, INTERVAL 1 month) where id=
	
?>