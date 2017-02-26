<?php
Class Main extends CI_Controller {

	public function index(){
		//$this->load->view('menu/content',$data);
		$this->load->view('login_form');
	}
}