<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class stack_con extends CI_Controller {

	public function __construct() {
        parent::__construct();
		$this->load->model('stack_model');
		$this->load->library('pagination');
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
	public function index()
	{
		$data['result'] = $this->stack_model->get_data();
		$this->load->view('stack',$data);
	}
	public function insert()
	{
		$this->load->view('insert_At');
	}

	public function newdata()
	{
		
		$this->stack_model->add($this->input->post('id'));
		
		redirect('stack_con', 'refresh');
	}

	public function show()
	{
		$data['result'] = $this->stack_model->get_data();
		$this->load->view('showdata',$data);
	}

	public function delete()
	{
		$this->stack_model->del();
        redirect('stack_con', 'refresh');
	}
}
