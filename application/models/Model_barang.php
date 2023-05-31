<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_barang extends CI_Model {

	public function barang_tampil()
	{
		return $this->db->get('barang');
	}

	public function getIdBarang()
	{

	}

	public function barang_simpan($object)
	{
		return $this->db->insert('barang', $object);
	}

	public function barang_update($Value,$object)
	{
		$this->db->where('kodebarang', $Value);
		return $this->db->update('barang', $object);
	}

}

/* End of file Model_barang.php */
/* Location: ./application/models/Model_barang.php */