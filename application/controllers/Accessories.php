<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Accessories extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('AccModel', 'Accessories');
        $this->form_validation->set_error_delimiters('<small class="text-danger">', '</small>');
    }

    public function Index() {
        $data['Accessories'] = $this->db->get('accessories')->result();

        $this->load->view('templates/admin_header');
        $this->load->view('accessories/index', $data);
        $this->load->view('templates/admin_footer');
    }

    public function Create() {
        // Config form validation
        $config = array(
            array(
                'field' => 'nama1',
                'label' => 'Nama',
                'rules' => 'trim|required|min_length[5]'
            ),
            array(
                'field' => 'jenis1',
                'label' => 'Jenis',
                'rules' => 'trim|required'
            ),
            array(
                'field' => 'brand1',
                'label' => 'Brand',
                'rules' => 'trim|required'
            ),
            array(
                'field' => 'stok1',
                'label' => 'Stok',
                'rules' => 'trim|required|min_length[1]'
            ),
            array(
                'field' => 'harga1',
                'label' => 'Harga',
                'rules' => 'trim|required|min_length[5]'
            )
        );

        // Set rules of form validation libraries
        $this->form_validation->set_rules($config);

        if($this->form_validation->run() == FALSE) {
            $this->load->view('templates/admin_header');
            $this->load->view('accessories/create');
            $this->load->view('templates/admin_footer');
        } else { 
            $data = array(
                'nama1' => $this->input->post('nama1', TRUE),
                'jenis1' => $this->input->post('jenis1', TRUE),
                'brand1' => $this->input->post('brand1', TRUE),
                'stok1' => $this->input->post('stok1', TRUE),
                'harga1' => $this->input->post('harga1', TRUE)
            );

            $this->Accessories->Store($data);

            redirect('accessories');
        }
    }

    public function Edit($id_barang = NULL) {
        if($id_barang == NULL) {
            redirect('accessories');
        }

        $accessories = $this->Accessories->Find($id_barang);

        if($accessories) {
            // Konfigurasi form validation
            $config = array(
                array(
                    'field' => 'nama1',
                    'label' => 'Nama',
                    'rules' => 'trim|required|min_length[5]'
                ),
                array(
                    'field' => 'jenis1',
                    'label' => 'Jenis',
                    'rules' => 'trim|required'
                ),
                array(
                    'field' => 'brand1',
                    'label' => 'Brand',
                    'rules' => 'trim|required'
                ),
                array(
                    'field' => 'stok1',
                    'label' => 'Stok',
                    'rules' => 'trim|required|min_length[1]'
                ),
                array(
                    'field' => 'harga1',
                    'label' => 'Harga',
                    'rules' => 'trim|required|min_length[5]'
                )
            );

            // Set aturan form validation
            $this->form_validation->set_rules($config);

            if($this->form_validation->run() == FALSE) {
                $this->load->view('templates/admin_header');
                $this->load->view(
                    'accessories/edit',
                    array(
                        'data' => $accessories
                    )
                );
                $this->load->view('templates/admin_footer');
            } else { 
                $data = array(
                    'nama1' => $this->input->post('nama1', TRUE),
                    'jenis1' => $this->input->post('jenis1', TRUE),
                    'brand1' => $this->input->post('brand1', TRUE),
                    'stok1' => $this->input->post('stok1', TRUE),
                    'harga1' => $this->input->post('harga1', TRUE)
                );

                $this->Accessories->Update($id_barang, $data);

                redirect('accessories');
            }
        } else {

            redirect('accessories');
        }
    }

    public function Delete($id_barang = NULL) {
        if($id_barang == NULL) {
            redirect('accessories');
        }

        $this->Accessories->Destroy($id_barang);

        redirect('accessories');
    }
}