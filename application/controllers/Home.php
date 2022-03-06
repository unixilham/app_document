<?php

class Home extends CI_Controller
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

        $data['tittle'] = "Dashboard";
        $data['icon'] = "mdi mdi-home";

        $data['document'] = $this->db->count_all('document');
        $data['departemen'] = $this->db->count_all('departemen');
        $data['jenis'] = $this->db->count_all('jenis');


        $this->load->view('template/header', $data);
        $this->load->view('template/navbar');
        $this->load->view('template/sidebar');
        $this->load->view('home', $data);
        $this->load->view('template/footer');
    }
}
