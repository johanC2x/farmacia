<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Select extends CI_Model
{	
	function __construct(){
		parent::__construct();
		$this->load->database();
	}
	/*
	Determines if a given person_id is a customer
	*/
	public function getVer(){

		return $this->db->get('tienda_caja');
	}

	public function getVerName($name){ 
		$this->db->query("Select * from tienda_caja where id_empresa = '".$name."' ");
		return $result->row();
	}

	public function provincias(){
		 $this->db->order_by('provincia','asc');
		 $provincia = $this->db->get('provincia');
		 if($provincia->num_rows()>0)
		 {
		 return $provincia->result();
		 }
	}
	 
	public function localidades($provincia){
		 $this->db->where('idprovincia',$provincia);
		 $this->db->order_by('poblacion','asc');
		 $localidades = $this->db->get('poblacion');
		 if($localidades->num_rows()>0)
		 {
		 return $localidades->result();
		 }
	}

}
?>
