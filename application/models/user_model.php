<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User_model extends CI_Model
{
	private $table_name = 'user';
	private $primary_key = 'username';
	public function __construct(){
		$this->load->database();
	}
	
	function selectAll()
	{
		$this->db->select('*');
		$this->db->from($this->table_name);
		return $this->db->get();
	}
	
	function selectById($username)
	{
		$this->db->select('*');
		$this->db->from($this->table_name);
		$this->db->where($this->primary_key,$username);
		return $this->db->get();
	}
	
	function insert($user)
	{
		$query = $this->db->insert($this->table_name,$user);
		if ($query) {
			return true;
		}else{
			return false;
		}
	}
	
	function update($username,$user)
	{
		$this->db->where($this->primary_key,$username);
		$query = $this->db->update($this->table_name,$user);

		if ($this->db->affected_rows() > 0) {
			return true ;
		}
		return false;
	}
	
	function delete($id)
	{
		$this->db->where($this->primary_key,$id);
		$query = $this->db->delete($this->table_name);
		if ($query) {
			return true;
		}else{
			return false;
		}
	}
}