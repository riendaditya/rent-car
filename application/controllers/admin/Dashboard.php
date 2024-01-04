<?php
    class Dashboard extends CI_Controller
    {
        public function index()
        {
			$data['total_customer'] = $this->rental_model->hitungJumlah('customer');
			$data['total_transaksi'] = $this->rental_model->hitungJumlah('transaksi');
			$data['total_mobil'] = $this->rental_model->hitungJumlah('mobil');
			$data['total_type'] = $this->rental_model->hitungJumlah('type');
            $this->load->view('templates_admin/header');
            $this->load->view('templates_admin/sidebar');
            $this->load->view('admin/dashboard', $data);
            $this->load->view('templates_admin/footer');
        }
    }
