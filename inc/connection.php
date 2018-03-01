<?php 
class connection
{
	var $con,$db,$query,$result;
	function connect()
	{
		$this->con=mysqli_connect("localhost","root","");
		$this->db=mysqli_select_db($this->con,"WTMM");
	}
	
	function update_delete($str)
	{
		$this->query=$str;
		if(mysqli_query($this->con,$this->query)){
			return true;
		}else{
			return false;
		}
	}

	function insert_with_id($str){
		$this->query=$str;
		if(mysqli_query($this->con,$this->query)){
			return mysqli_insert_id($this->con);
		}else{
			return false;
		}
	}
	
	function select($str)
	{
		$this->query=$str;
		$this->result = mysqli_query($this->con,$this->query);
	}
}
?>
