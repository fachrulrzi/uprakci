<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Perpus extends CI_Controller {

    public function __construct() {        
        parent::__construct();
        $this->load->model('Peminjam_m');
    }
    public function index()
    {
        $data['peminjam'] = $this->Peminjam_m->get_data('peminjam')->result();
        return $this->load->view('v_home', $data);
    }
    public function create()
    {
        return $this->load->view('v_pinjam');
    }
    public function store()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'nik' => $this->input->post('nik'),
            'kode_buku' => $this->input->post('kode_buku'),
            'nama_buku' => $this->input->post('nama_buku'),
        ];
        $this->Peminjam_m->insert_data($data, 'peminjam');
        redirect('perpus');
    }
    public function edit($id)
    {
        $where = ['id' => $id];
        $data['peminjam']=$this->Peminjam_m->edit_data($where, 'peminjam')->result();

        return $this->load->view('v_edit', $data);
    }
    public function update($id)
    {
        $data = [
            'id' => $id,
            'nama' => $this->input->post('nama'),
            'nik' => $this->input->post('nik'),
            'kode_buku' => $this->input->post('kode_buku'),
            'nama_buku' => $this->input->post('nama_buku'),
        ];
        $this->Peminjam_m->update_data($data, 'peminjam');
        redirect('perpus');
        
    }
    public function destroy($id)
    {
        $where = ['id' => $id];
        $this->Peminjam_m->delete_data($where, 'peminjam');
        redirect('perpus');
    }

}

/* End of file Perpus.php */

?>