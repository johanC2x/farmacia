<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once("Secure_Controller.php");

class Select extends Secure_Controller 
{
	
 	public function index()
 	{
 				  $this->db->group_by('name_tienda');
	    $result = $this->db->get('tienda_caja');
	    $data = array('consulta'=>$result);
   				$this->load->view('Select', $data);
 
 	}


 	public function get_pos() {
        $store_id = $this->input->post('id', TRUE);
        $districtData['districtDrop'] = $this->Pos_location->get_pos($store_id);
        $output = null;
        if ($districtData['districtDrop'] == 0) {

            $output .= "<option value=''>" . $this->lang->line('common_login_error') . "</option>";
        } else {

            foreach ($districtData['districtDrop'] as $row) {
                $output .= "<option value='" . $row->pos_id . "'>" . $row->pos_name . "</option>";
            }
        }
        echo $output;
    }

	public function logout()
	{
		$this->Employee->logout();

		if($this->config->item('statistics') == TRUE)
		{
			$this->load->library('tracking_lib');

			$this->tracking_lib->track_page('logout', 'logout');
		}
	}


}
?>