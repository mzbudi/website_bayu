<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Modelsentimen extends CI_Model{

	public function ambildata($param){

		$dataquery = $this->db->query('select * from '.$param);

		return $dataquery->result_array();
	}
}