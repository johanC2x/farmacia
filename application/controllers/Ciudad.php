<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Ciudad extends CI_Controller
{
 public function __construct()
 {
 parent::__construct();
 $this->load->model('Select');
 }
 
 public function index()
 {
 $datos['provincias'] = $this->Select->provincias();
 $this->load->view('Ciudad_view', $datos);
 }
 
 public function llena_localidades()
 {
 $options = "";
 if($this->input->post('provincia'))
 {
 $provincia = $this->input->post('provincia');
 $localidades = $this->Select->localidades($provincia);
 foreach($localidades as $fila)
 {
 ?>
 <option value="<?=$fila -> poblacionseo ?>"><?=$fila -> poblacion ?></option>
 <?php
 }
 }
 }
}