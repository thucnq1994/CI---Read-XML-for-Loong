<?php if (!defined('BASEPATH')){ exit('No direct script access allowed');}

class Equip_name_model extends CI_Model {

  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

  public function insert_batch($table_name, $data)
  {
    return $this->db->insert_batch($table_name, $data);
  }

  public function create($table_name, $data)
  {
    $this->db->insert($table_name, $data);
    return $this->db->insert_id();
  }
}