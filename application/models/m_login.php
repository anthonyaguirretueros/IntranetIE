<?php if(!defined('BASEPATH')) exit('no direct script acces allowed');

/**
* 
*/
class M_login extends CI_Model
{
	public $variable;
	
	function __construct()
	{
		parent::__construct();
	}
	public function login($username,$password)
	{	

		$this->db->where('username',$username);
		$this->db->where('password',$password);
		$q = $this->db->get('tb_login');

		if ($q->num_rows()>0) {
			 return true;
		}else{
			return false;
		}
	}	

	public function setUsuario(array $datos)
	{
		return $this->db->insert('tb_login');

	}



}


 ?>