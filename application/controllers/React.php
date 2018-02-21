<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class React extends CI_Controller {
	function __construct() {
		parent::__construct();
		$js = file_get_contents(APPPATH . 'libraries/react/home');
		$this->load->library('reactjs', array(
			$js
		), 'react');
	}
	public function index() {
		$page_data['content'] = $this->react->getMarkup();
		$page_data['js']      = $this->react->getJS('#page', "GLOB");
		$this->load->view('index', $page_data);
	}
}
