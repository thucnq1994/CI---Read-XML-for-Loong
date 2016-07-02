<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->model('equip_name_model');
		$xml=simplexml_load_file(base_url('static/equip_name.xml')) or die("Error: Cannot create object");
		
		//$data = array();
		foreach ($xml->item as $item) {
			$temp_data = array();
			foreach ($item->attributes() as $key => $value) {
				$temp_data[$key] = $value;
			}
			$this->equip_name_model->create('equip_name_vn', $temp_data);
		}
	}
}
