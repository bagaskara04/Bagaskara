<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('TabelModel', 'Tabel');
    }

    public function index() {
        $data['DataBarang'] = $this->db
            ->get('goods')
            ->result();

        $this->load->view('templates/admin_header');
        $this->load->view('admin/index', $data);
        $this->load->view('templates/admin_footer');
    }

    public function Tabel() {
        
    }
}