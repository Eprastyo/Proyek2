<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){
		parent::__construct();

		if ($this->session->userdata('status') != "login"){
			redirect(base_url("Login"));
		}
	}

	public function index()
	{
		$this->load->view('v_login');
	}
	public function hal_dashboard()
	{
		$this->load->view('v_hal_utama');
	}
	public function data_lapangan()
	{
		$this->load->view('v_data_lapangan');
	}
	public function dat_pemesan()
	{
		$this->load->view('v_data_pemesan');
	}
	public function transaksi()
	{
		$this->load->view('v_transaksi');
	}
}
