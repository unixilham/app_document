<?php

class Dashboard extends CI_Controller
{

    public function index()


    {

        $data['tittle'] = "Dashboard";
        $data['icon'] = "mdi mdi-home";

        $data['document'] = $this->db->count_all('document');
        $data['departemen'] = $this->db->count_all('departemen');

        $this->db->order_by('nama_departemen', 'asc');
        $data['data_departemen'] = $this->document_model->get_data('departemen')->result();
        $data['jenis'] = $this->db->count_all('jenis');

        $data['user'] = $this->session->userdata('username');


        $this->load->view('template_user/header', $data);
        $this->load->view('template_user/navbar');
        $this->load->view('template_user/sidebar', $data);
        $this->load->view('user/dashboard', $data);
        $this->load->view('template_user/footer');
    }

    public function tampil_data($url = null)
    {


        if (!$url) {
            # code...
            redirect('dashboard');
        }

        $where = [
            'nama_departemen' => $url
        ];

        $this->db->order_by('nama_departemen', 'asc');
        $data['data_departemen'] = $this->document_model->get_data('departemen')->result();

        $data['tampil'] = $this->document_model->get_dataById('departemen', $where)->result();

        $this->db->select('jenis.nama_jenis, departemen.nama_departemen, document.judul_document, document.tgl_upload, document.document');
        $this->db->from('document');
        $this->db->join('departemen', 'departemen.id_departemen = document.id_departemen');
        $this->db->join('jenis', 'jenis.id = document.id_jenis');
        $this->db->where('departemen.id_departemen', $url);
        $data['document'] = $this->db->get()->result();

        $data['tittle'] = "Tampil Data Dokumen";
        $data['icon'] = "mdi mdi-file-document";



        $this->load->view('template_user/header', $data);
        $this->load->view('template_user/navbar');
        $this->load->view('template_user/sidebar', $data);
        $this->load->view('user/tampil_data', $data);
        $this->load->view('template_user/footer');
    }
}
