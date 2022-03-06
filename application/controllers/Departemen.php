<?php

class Departemen extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // Your own constructor code
        if (!$this->session->userdata('username')) {
            redirect('dashboard');
        }
    }

    public function index()


    {

        $data['tittle'] = "Departemen";
        $data['icon'] = "mdi mdi-worker";

        $data['jenis'] = $this->document_model->get_data('departemen')->result();

        // var_dump($data['jenis']);

        $this->load->view('template/header', $data);
        $this->load->view('template/navbar');
        $this->load->view('template/sidebar');
        $this->load->view('admin/departemen', $data);
        $this->load->view('template/footer');
    }

    public function tambah()
    {
        $data['tittle'] = "Tambah Departemen";
        $data['icon'] = "mdi mdi-worker";

        // $data['jenis'] = $this->document_model->get_data('jenis')->result();

        // var_dump($data['jenis']);

        $this->form_validation->set_rules('nama_departemen', 'Nama Departemen', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('template/navbar');
            $this->load->view('template/sidebar');
            $this->load->view('admin/tambah_departemen', $data);
            $this->load->view('template/footer');
        } else {

            $data = [
                'nama_departemen' => $this->input->post('nama_departemen')
            ];

            $this->document_model->insert_data('departemen', $data);


            $this->session->set_flashdata('pesan', 'tambah');

            redirect('departemen');
        }
    }

    public function delete($id = null)
    {
        $where = [
            'id_departemen' => $id
        ];

        $this->document_model->delete_data('departemen', $where);


        $this->session->set_flashdata('pesan', 'hapus');

        redirect('departemen');
    }

    public function update($id = null)
    {
        $data['tittle'] = "Update Departemen";
        $data['icon'] = "mdi mdi-worker";

        $where = [
            'id_departemen' => $id
        ];

        $data['departemen'] = $this->document_model->get_dataById('departemen', $where)->row_array();

        // var_dump($data['jenis']);
        // die;

        $this->form_validation->set_rules('nama_departemen', 'Nama Departemen', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('template/navbar');
            $this->load->view('template/sidebar');
            $this->load->view('admin/ubah_departemen', $data);
            $this->load->view('template/footer');
        } else {



            $data = [
                'nama_departemen' => $this->input->post('nama_departemen')
            ];

            $this->document_model->update_data('departemen', $data, $where);


            $this->session->set_flashdata('pesan', 'update');

            redirect('departemen');
        }
    }
}
