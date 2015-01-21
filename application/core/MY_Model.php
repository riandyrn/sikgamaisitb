<?php

class MY_Model extends CI_Model
{
	
	public function addData($table, $data)
	{
		$this->db->insert($table, $data);
		return $this->db->insert_id();
	}
	
	/*
		$wheres bertipe table dlm bentuk
		array of array
		
		setiap array:
		[0]: key
		[1]: value
		
		ini untuk mempermudah generalisasi
		query WHERE
	*/
	
	public function updateData($table, $data, $wheres)
	{
		do
		{
			$this->db->where(key($wheres), current($wheres));
		} while(next($wheres));
		
		$this->db->update($table, $data);
		return ($this->db->affected_rows() > 0);
	}
	
	public function getData($table, $wheres = null, $customfields = null)
	{
		if($wheres)
		{
			do
			{
				$this->db->where(key($wheres), current($wheres));
			} while(next($wheres));
		}
		
		if($customfields)
		{
			$this->db->select($customfields);
		}
		
		$this->db->order_by('id','desc');
		
		$query = $this->db->get($table);
		return $query->result();
	}
	
	public function deleteData($table, $wheres = null)
	{
		if($wheres)
		{
			do
			{
				$this->db->where(key($wheres), current($wheres));
			} while(next($wheres));
		}
		
		return $this->db->delete($table);
	}
}

?>