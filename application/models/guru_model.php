<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Guru_model extends CI_Model
{
	private $table_name ='guru';
	private $primary_key = 'nip';
	
	public function __construct()
	{
		parent::__construct();
		$this->load->database();		
	}
	
	
	function selectAll()
	{
		$this->db->select('*');
		$this->db->from($this->table_name);
		// $this->db->join('species','species.species_id='.$this->table_name.'.species_id');
		// $this->db->join('package','package.package_id='.$this->table_name.'.packaging_id');
		// $this->db->join('country','country.country_id='.$this->table_name.'.country_id');			
		return $this->db->get();
	}
	
	function selectById($id) {
		$this->db->select('*');
		$this->db->from($this->table_name);
		$this->db->where($this->primary_key,$id);
		return $this->db->get();
	}
	
	function selectByRead(){
		$this->db->select($this->primary_key);
		$this->db->from($this->table_name);
		//$this->db->where('read','0');
		$query = $this->db->get();
		return $query->num_rows();
	}

	function selectByUsername($username){
		$this->db->select('*');
		$this->db->from($this->table_name);
		$this->db->where('username',$username);		
		return $this->db->get();
	}
	
	function insert($health) {
		$this->db->insert($this->table_name,$health);
	}
	
	function update($id,$health){
		$this->db->where($this->primary_key,$id);
		$this->db->update($this->table_name,$health);
	}
	
	function updateRead($id,$health){
		$this->db->where($this->primary_key,$id);
		$this->db->update($this->table_name,$health);
		if ($this->db->affected_rows() > 0) {
			return true ;
		}
		return false;
	}
}