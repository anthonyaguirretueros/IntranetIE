<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class m_alumno extends CI_Model
{
	function __construct()
	{
		parent :: __construct();
		$this->load->database();
	}

	public function getalumno()
	{
		return $this->db->query("SELECT id_alumno,nombre,apellido,cumpleanos,grado,nivel FROM tb_alumno")->result();
		//return $arrayName = array(1 => '123');
	}

	public function setalumno(string $nombre,string $apellido,string $cumpleanos,string $grado,string $nivel)
	{	
		
		 return $this->db->query("INSERT INTO tb_alumno(nombre,apellido,cumpleanos,grado,nivel) values ({$nombre},{$apellido},{$cumpleanos},{$grado},{$nivel})");
	}


}
 ?>