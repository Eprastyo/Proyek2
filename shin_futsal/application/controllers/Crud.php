<?php

Class Crud extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->model('m_data');
		$this->load->helper(array('form','url'));
	}

	public function index(){
		$data['data_lapangan'] = $this->m_data->tampil_data()->result();
		$this->load->view('v_data_lapangan',$data);
	}

	public function tambah(){
		$this->load->view('v_input_lapangan');
	}

	public function tambah_aksi(){
				$config['upload_path']          = './gambar/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 10000;
                $config['max_width']            = 5000;
                $config['max_height']           = 5000;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('berkas'))
                {
                    $error = array('error' => $this->upload->display_errors());
                    $this->load->view('upload_form', $error);
                }
                else
                {
                    $data = array('upload_data' => $this->upload->data());
                    $this->load->view('upload_success', $data);

                 
                    $nama = $this->input->post('nama',true);
					$harga_sewa = $this->input->post('harga_sewa',true);
					$keterangan = $this->input->post('keterangan',true);
					$img = $this->upload->data();
					$gambar = $img['file_name'];
					

					$data = array('nama' => $nama,'harga_sewa'=>$harga_sewa,'keterangan'=>$keterangan,
						'gambar'=>$gambar);

					$this->m_data->input_data($data,'t_lapangan');
					redirect('Crud/index');
                }
        }

    public function hapus($id_lapangan){
    	$where = array('id_lapangan' => $id_lapangan);
    	$this->m_data->hapus_data($where,'t_lapangan');
    	redirect('Crud/index');
    }

    public function edit($id_lapangan){
    	$where = array('id_lapangan' => $id_lapangan );
    	$data['t_lapangan'] = $this->m_data->edit_data($where,'t_lapangan')->result();
    	$this->load->view('v_edit_lapangan',$data);
    }

    function update(){
	$id = $this->input->post('id_lapangan');
	$nama = $this->input->post('nama');
	$harga_sewa = $this->input->post('harga_sewa');
	$keterangan = $this->input->post('keterangan');
 
	$data = array(
		'nama' => $nama,
		'harga_sewa' => $harga_sewa,
		'keterangan' => $keterangan
	);
 
	$where = array(
		'id_lapangan' => $id
	);
 
	$this->m_data->update_data($where,$data,'t_lapangan');
	redirect('crud/index');
}
}
?>