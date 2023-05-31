<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_barang');
		$this->load->library('user_agent');
	}

	public function index()
	{
		$data['judul']="Daftar Barang";
		$data['barang']= $this->Model_barang->barang_tampil()->result();
		$this->load->view('barang/barang_tampil', $data, FALSE);
	}

	public function barang_tambah()
	{
		$data['judul']="Tambah Barang";
		$this->load->view('barang/barang_tambah', $data, FALSE);
	}

	public function barang_simpan()
	{
		$object=array(
			'kodebarang'=>$this->input->post('kodebarang'),
			'namabarang'=>$this->input->post('namabarang'),
			'harga'=>$this->input->post('harga'),
			'jumlah'=>$this->input->post('jumlah'),
		);

		$simpan=$this->Model_barang->barang_simpan($object);
		redirect('barang');
		
	}

	public function barang_edit()
	{
		$data['judul']="Edit Data Barang";
		$id=$this->uri->segment(3);
		$data['edit'] = $this->db->get_where('barang', array('kodebarang' => $id))->row_array();   	
		$this->load->view('barang/barang_edit', $data, FALSE);
	}

	public function barang_update()
	{

	}

	public function barang_hapus()
	{
		$id=$this->uri->segment(3);
		$this->db->where('kodebarang', $id);
		$this->db->delete('barang');
		redirect('barang');
	}

}

/* End of file Barang.php */
/* Location: ./application/controllers/Barang.php */