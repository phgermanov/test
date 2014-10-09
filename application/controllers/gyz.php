<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gyz extends CI_Controller {


	// List all your items
	public function index( $offset = 0 )
	{
		$data['id'] = 0;
		$data['gyz'] = 'Home page';
		$this->load->view('index', $data);
	}

	// Add a new item
	public function about()
	{
		$data['id'] = 1;
		$data['gyz'] = 'About page';
		$this->load->view('about', $data);
	}

	//Update one item
	public function projects( $id = NULL )
	{
		$data['id'] = 2;
		$data['gyz'] = 'Projects page';
		$this->load->view('projects', $data);
	}

	//Delete one item
	public function contact( $id = NULL )
	{
		$data['id'] = 3;
		$data['gyz'] = 'Contact page';
		$this->load->view('contact', $data);
	}
}

/* End of file gyz.php */
/* Location: ./application/controllers/gyz.php */