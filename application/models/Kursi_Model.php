<?php 
/**
 * 
 */
 class Kursi_Model extends CI_Model
 {
 	public $nama_table = 'Kursi';
 	public $id = 'ID_Kursi';
 	public $order = 'DSC';

 	function __construct()
 	{
 		parent::__construct();
 	}

 	function Select_Kursi()
 	{
 		$this->db->distinct();
 		$this->db->select('K.ID_Kursi , S.ID_Studio, K.Nama_Kursi, S.Nama_Studio ');
 		$this->db->from('Kursi K');
 		$this->db->join('Studio S', 'S.ID_Studio = K.ID_Studio');
 		return $this->db->get($this->nama_table)->result();
 	}
 	function hapus_data($id)
 	{
 		$this->db->where($this->id,$id);
 		$this->db->delete($this->nama_table);
 	}
 	function tambah_data($data){
 		return $this->db->insert($this->nama_table, $data);
 	}
 	function edit_data($id,$data){
 		$this->db->where($this->id,$id);
 		$this->db->update($this->nama_table, $data);
 	}
 	function ambil_data_id($id){
 		$this->db->where($this->id,$id);
 		return $this->db->get($this->nama_table)->row();
 	}
 } ?>