<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_mobil extends CI_Controller
{
    public function index()
    {
        $data['mobil'] = $this->rental_model->get_data('mobil')->result();
        $data['type'] = $this->rental_model->get_data('type')->result();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_mobil', $data);
        $this->load->view('templates_admin/footer');
    }

    public function tambah_mobil()
    {
        $data['type'] = $this->rental_model->get_data('type')->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/form_tambah_mobil', $data);
        $this->load->view('templates_admin/footer');
    }

    public function tambah_mobil_aksi()
    {
        $this->_rules();
        if ($this->form_validation->run() == FALSE) {
            $this->tambah_mobil();
        } else {
            $kode_type      = $this->input->post('kode_type');
            $merk           = $this->input->post('merk');
            $no_plat        = $this->input->post('no_plat'); 
            $warna          = $this->input->post('warna');
            $tahun          = $this->input->post('tahun');
            $status         = $this->input->post('status');
            $transmisi      = $this->input->post('transmisi');
            $bahan_bakar    = $this->input->post('bahan_bakar');
            $harga          = $this->input->post('harga');
            $denda          = $this->input->post('denda');
            $supir          = $this->input->post('supir');
            $gambar         = $_FILES['gambar']['name'];
            if ($gambar == '') {
            } else {
                $config['upload_path'] = './assets/upload';
                $config['allowed_types'] = 'jpg|png|jpeg|tiff';

                $this->load->library('upload', $config);
                if ($this->upload->do_upload('gambar')) {
                    echo "Gambar Mobil Gagal Di upload";
                } else {
                    $gambar = $this->upload->data('file_name');
                }
            }

            $data = array(
                'kode_type'     => $kode_type,
                'merk'          => $merk,
                'no_plat'       => $no_plat,
                'tahun'         => $tahun,
                'warna'         => $warna,
                'status'        => $status,
                'harga'         => $harga,
                'denda'         => $denda,
                'supir'         => $supir,
                'bahan_bakar'   => $bahan_bakar,
                'transmisi'     => $transmisi,
                'gambar'        => $gambar
            );

            $this->rental_model->insert_data($data, 'mobil');
            $this->session->set_flashdata(
                'pesan',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Data Mobil Berhasil Ditambahkan!!</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>'
            );
            redirect('admin/data_mobil');
        }
    }

    public function update_mobil($id)
    {
        $where = array('id_mobil' => $id);
        $data['mobil'] = $this->db->query("SELECT * FROM mobil mb, type tp WHERE mb.kode_type = tp.kode_type AND mb.id_mobil ='$id'")->result();
        $data['type'] = $this->rental_model->get_data('type')->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/form_update_mobil', $data);
        $this->load->view('templates_admin/footer');
    }

    public function update_mobil_aksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) 
        {
            $this->update_mobil('id');
        } else {
            $id             = $this->input->post('id_mobil');
            $kode_type      = $this->input->post('kode_type');
            $merk           = $this->input->post('merk');
            $no_plat        = $this->input->post('no_plat');
            $warna          = $this->input->post('warna');
            $tahun          = $this->input->post('tahun');
            $status         = $this->input->post('status');
            $transmisi      = $this->input->post('transmisi');
            $bahan_bakar    = $this->input->post('bahan_bakar');
            $harga          = $this->input->post('harga');
            $denda          = $this->input->post('denda');
            $supir          = $this->input->post('supir');

            //konfigutasi file gambar
            $gambar         = $_FILES['gambar']['name'];
            if ($gambar) {
                $config['upload_path'] = './assets/upload';
                $config['allowed_types'] = 'jpg|png|jpeg|tiff';

                $this->load->library($config, 'upload' );
                if ($this->upload->do_upload('gambar')) {
                    $gambar = $this->upload->data('file_name');
                    $this->db->set('gambar', $gambar);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $data = array(
                'kode_type'     => $kode_type,
                'merk'          => $merk,
                'no_plat'       => $no_plat,
                'tahun'         => $tahun,
                'warna'         => $warna,
                'status'        => $status,
                'harga'         => $harga,
                'denda'         => $denda,
                'supir'         => $supir,
                'bahan_bakar'   => $bahan_bakar,
                'transmisi'     => $transmisi
            );

            $where = array(
                'id_mobil' => $id
            );

            $this->rental_model->update_data('mobil', $data, $where);
            $this->session->set_flashdata(
                'pesan',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
                Data Mobil berhasil diUpdate!.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>'
            );
            redirect('admin/data_mobil');
        }
    }
    #form validation
    public function _rules()
    {
        $this->form_validation->set_rules('kode_type', 'Kode Type', 'required');
        $this->form_validation->set_rules('merk', 'Merk', 'required');
        $this->form_validation->set_rules('no_plat', 'No Plat', 'required');
        $this->form_validation->set_rules('tahun', 'Tahun', 'required');
        $this->form_validation->set_rules('warna', 'Warna', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required');
        $this->form_validation->set_rules('transmisi', 'Transmisi', 'required');
        $this->form_validation->set_rules('bahan_bakar', 'Bahan Bakar', 'required');
        $this->form_validation->set_rules('supir', 'Supir', 'required');
        $this->form_validation->set_rules('harga', 'Harga', 'required');
        $this->form_validation->set_rules('denda', 'Denda', 'required');
        
        
    }

    public function detail_mobil($id)
    {
        $data['detail'] = $this->rental_model->ambil_id_mobil($id);
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/detail_mobil', $data);
        $this->load->view('templates_admin/footer');
    }

    public function delete_mobil($id)
    {
        $where = array('id_mobil' => $id);
        $this->rental_model->delete_data($where, 'mobil');
        $this->session->set_flashdata(
            'pesan',
            '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Data Mobil berhasil dihapus!!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>'
        );
        redirect('admin/data_mobil');
    }
}
