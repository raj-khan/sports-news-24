<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	//Home
	public function index()
	{
		$data = array();
		$data['title'] = "mamasports24.com";
		$data['mainContent'] = $this->load->view('pages/home', '', true);
		$this->load->view('master', $data);
	}

	//cricket
	public function cricket()
	{
		$data = array();
		$data['title'] = "mamasports24.com - Cricket";
		$data['mainContent'] = $this->load->view('pages/cricket', '', true);
		$this->load->view('master', $data);
	}

	//cricketDetails
	public function cricketDetails()
	{
		$data = array();
		$data['title'] = "mamasports24.com - Cricket Details";
		$data['mainContent'] = $this->load->view('pages/cricketDetails', '', true);
		$this->load->view('master', $data);
	}


	//About
	public function about()
	{
		$data = array();
		$data['title'] = "mamasports24.com - About Us";
		$data['mainContent'] = $this->load->view('pages/about', '', true);
		$this->load->view('master', $data);
	}



	//copyright
	public function copyright()
	{
		$data = array();
		$data['title'] = "mamasports24.com - Copyright";
		$data['mainContent'] = $this->load->view('pages/copyright', '', true);
		$this->load->view('master', $data);
	}



	//privacyPolicy
	public function privacyPolicy()
	{
		$data = array();
		$data['title'] = "mamasports24.com - Privacy Policy";
		$data['mainContent'] = $this->load->view('pages/privacyPolicy', '', true);
		$this->load->view('master', $data);
	}

}
