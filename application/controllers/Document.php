<?php

class Document extends CI_Controller
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
        $data['tittle'] = "Document";
        $data['icon'] = "mdi mdi-file-multiple";

        $this->db->select('*');
        $this->db->from('document');
        $this->db->join('jenis', 'jenis.id = document.id_jenis');
        $this->db->join('departemen', 'departemen.id_departemen = document.id_departemen');
        $data['departemen'] = $this->db->get()->result();



        // var_dump($query);
        // die;

        $this->load->view('template/header', $data);
        $this->load->view('template/navbar');
        $this->load->view('template/sidebar');
        $this->load->view('admin/document', $data);
        $this->load->view('template/footer');
    }

    public function tambah()
    {
        $data['tittle'] = "Tambah Document";
        $data['icon'] = "mdi mdi-file-multiple";

        // rules
        $this->db->order_by('nama_jenis', 'ASC');
        $data['jenis'] = $this->document_model->get_data('jenis')->result();


        $data['departemen'] = $this->document_model->get_data('departemen')->result();

        $this->form_validation->set_rules('jenis', 'Nama Jenis', 'required', ['required' => '<small class="text-danger">Jenis Tidak Boleh Kosong</small>']);
        $this->form_validation->set_rules('judul_document', 'Judul Document', 'required', ['required' => '<small class="text-danger">Judul Document Tidak Boleh Kosong</small>']);
        $this->form_validation->set_rules('departemen', 'Departemen', 'required', ['required' => '<small class="text-danger">Departemen Tidak Boleh Kosong</small>']);
        // $this->form_validation->set_rules('document', 'Document', 'required', ['required' => '<small class="text-danger">Document Tidak Boleh Kosong</small>']);

        // var_dump($_FILES['document']['name']);
        // die;

        if ($this->form_validation->run() == false) {

            # code...
            $this->load->view('template/header', $data);
            $this->load->view('template/navbar');
            $this->load->view('template/sidebar');
            $this->load->view('admin/tambah_document', $data);
            $this->load->view('template/footer');
        } else {


            $file = $_FILES['document']['name'];

            if (!$file) {
                // code...
                $file = $this->input->post('document');
            } else {
                $config['upload_path'] = './assets/upload/';
                $config['allowed_types'] = 'pdf';
                $config['max_size'] = '3072';
                // $config['encrypt_name'] = True;


                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('document')) {
                    echo "File gagal di upload";
                } else {


                    $file = $this->upload->data('file_name');
                }
            }



            $data = [
                'id_jenis' => $this->input->post('jenis'),
                'judul_document' => $this->input->post('judul_document'),
                'id_departemen' => $this->input->post('departemen'),
                'tgl_upload' => date('d F Y'),
                'document'   => $file
                // 'document' => 
            ];

            $this->document_model->insert_data('document', $data);

            $this->session->set_flashdata('pesan', 'tambah');

            redirect('document');
        }
    }



    public function delete($id = null)
    {
        $where = [
            'id_document' => $id
        ];

        $this->document_model->delete_data('document', $where);


        $this->session->set_flashdata('pesan', 'hapus');

        redirect('document');
    }

    public function update($id = null)
    {

        $data['tittle'] = "Tambah Document";
        $data['icon'] = "mdi mdi-file-multiple";



        // rules
        $this->db->order_by('nama_jenis', 'ASC');
        $data['jenis'] = $this->document_model->get_data('jenis')->result();


        $data['departemen'] = $this->document_model->get_data('departemen')->result();





        $this->db->select('*');
        $this->db->from('document');
        $this->db->join('jenis', 'jenis.id = document.id_jenis');
        $this->db->join('departemen', 'departemen.id_departemen = document.id_departemen');
        $this->db->where('document.id_document', $id);
        $data['document'] = $this->db->get()->row();

        // var_dump($data['document']->document);
        // die;

        $this->form_validation->set_rules('jenis', 'Nama Jenis', 'required', ['required' => '<small class="text-danger">Jenis Tidak Boleh Kosong</small>']);
        $this->form_validation->set_rules('judul_document', 'Judul Document', 'required', ['required' => '<small class="text-danger">Judul Document Tidak Boleh Kosong</small>']);
        $this->form_validation->set_rules('departemen', 'Departemen', 'required', ['required' => '<small class="text-danger">Departemen Tidak Boleh Kosong</small>']);


        if ($this->form_validation->run() == FALSE) {

            $this->load->view('template/header', $data);
            $this->load->view('template/navbar');
            $this->load->view('template/sidebar');
            $this->load->view('admin/update_document', $data);
            $this->load->view('template/footer');
        } else {

            //jika ada document

            $upload_doc = $_FILES['document']['name'];

            // var_dump($upload_doc);
            // die;

            if ($upload_doc) {
                $config['upload_path']          = './assets/upload/';
                $config['allowed_types']        = 'pdf';
                $config['max_size'] = '3072';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('document')) {
                    $old_dock = $data['document']->document;
                    $new_doc = $this->upload->data('file_name');

                    if ($old_dock != null) {
                        # code...
                        unlink(FCPATH . 'assets/upload/' . $old_dock);
                    }

                    $this->db->set('document', $new_doc);
                } else {
                    echo $this->upload->display_errors();
                }
            }



            $where = [
                'id_document' => $this->input->post('id_document')
            ];
            $data = [
                'id_jenis' => $this->input->post('jenis'),
                'judul_document' => $this->input->post('judul_document'),
                'id_departemen' => $this->input->post('departemen'),
                'tgl_upload' => date('d F Y')
            ];

            // var_dump($data);
            // die;

            $this->document_model->update_data('document', $data, $where);


            $this->session->set_flashdata('pesan', 'update');

            redirect('document');
        }
    }
}
