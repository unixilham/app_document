<?php

class Jenis_document extends CI_Controller
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
        $data['tittle'] = "Jenis Document";
        $data['icon'] = "mdi mdi-file-multiple";

        $data['jenis'] = $this->document_model->get_data('jenis')->result();

        // var_dump($data['jenis']);

        $this->load->view('template/header', $data);
        $this->load->view('template/navbar');
        $this->load->view('template/sidebar');
        $this->load->view('admin/jenis', $data);
        $this->load->view('template/footer');
    }

    public function tambah()
    {
        $data['tittle'] = "Tambah Jenis Document";
        $data['icon'] = "mdi mdi-file-multiple";

        // $data['jenis'] = $this->document_model->get_data('jenis')->result();

        // var_dump($data['jenis']);

        $this->form_validation->set_rules('jenis', 'Nama Jenis', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('template/navbar');
            $this->load->view('template/sidebar');
            $this->load->view('admin/tambah_jenis', $data);
            $this->load->view('template/footer');
        } else {

            $data = [
                'nama_jenis' => $this->input->post('jenis')
            ];

            $this->document_model->insert_data('jenis', $data);


            $this->session->set_flashdata('pesan', 'tambah');

            redirect('jenis_document');
        }
    }

    public function delete($id = null)
    {
        $where = [
            'id' => $id
        ];

        $this->document_model->delete_data('jenis', $where);


        $this->session->set_flashdata('pesan', 'hapus');

        redirect('jenis_document');
    }

    public function update($id = null)
    {
        $data['tittle'] = "Update Jenis Document";
        $data['icon'] = "mdi mdi-file-multiple";

        $where = [
            'id' => $id
        ];

        $data['jenis'] = $this->document_model->get_dataById('jenis', $where)->row_array();

        // var_dump($data['jenis']);
        // die;

        $this->form_validation->set_rules('jenis', 'Nama Jenis', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('template/navbar');
            $this->load->view('template/sidebar');
            $this->load->view('admin/ubah_jenis', $data);
            $this->load->view('template/footer');
        } else {



            $data = [
                'nama_jenis' => $this->input->post('jenis')
            ];

            $this->document_model->update_data('jenis', $data, $where);


            $this->session->set_flashdata('pesan', 'diubah');

            redirect('jenis_document');
        }
    }
}
