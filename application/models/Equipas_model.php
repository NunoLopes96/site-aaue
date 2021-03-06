<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Equipas_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	/**
	* Index Page for this controller.
	*
	* Maps to the following URL
	* 		http://example.com/index.php/welcome
	*	- or -
	* 		http://example.com/index.php/welcome/index
	*	- or -
	* Since this controller is set as the default controller in
	* config/routes.php, it's displayed at http://example.com/
	*
	* So any other public methods not prefixed with an underscore will
	* map to /index.php/welcome/<method_name>
	* @see https://codeigniter.com/user_guide/general/urls.html
	*/
	public function getNomeEquipas()
	{
		$query = $this->db->get('tr2017_equipas');

		return $query->result_array();
	}

	public function getNomeJogadores()
	{
		$this->db->select('*');
		$this->db->from('tr2017_equipas');
		$this->db->join('tr2017_jogadores', 'tr2017_jogadores.equipaId = tr2017_equipas.id');
		$query = $this->db->get();
		return $query->result_array();

	}
}
