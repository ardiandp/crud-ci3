<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_menu');
	}

	function index() {
      $this->load->model('Model_menu');
      $data['master_detail'] = $this->Model_menu->get_master_detail();
      $this->load->view('view_menu', $data);
   }

   public function get_menus() {
    $this->load->model('Model_menu');
    $menus = $this->Model_menu->menus();
    $data = array('menus' => $menus);
    $this->load->view('page1', $data);
	}

	public function get_labs() {
    
	$menus = $this->Model_menu->input_lab();
	$data = array('menus' => $menus);
    $this->load->view('page2', $data);
	}

}

/* End of file Menu.php */
/* Location: ./application/controllers/Menu.php */