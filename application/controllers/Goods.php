<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Goods extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('GoodsModel', 'Goods');
        $this->form_validation->set_error_delimiters('<small class="text-danger">', '</small>');
    }

    public function Index() {
        $data['Goods'] = $this->db->get('goods')->result();

        $this->load->view('templates/admin_header');
        $this->load->view('goods/index', $data);
        $this->load->view('templates/admin_footer');
    }

    public function Create() {
        // Config form validation
        $config = array(
            array(
                'field' => 'nama',
                'label' => 'Nama',
                'rules' => 'trim|required|min_length[5]'
            ),
            array(
                'field' => 'jenis',
                'label' => 'Jenis',
                'rules' => 'trim|required'
            ),
            array(
                'field' => 'brand',
                'label' => 'Brand',
                'rules' => 'trim|required'
            ),
            array(
                'field' => 'cpu',
                'label' => 'CPU',
                'rules' => 'trim|required|min_length[5]'
            ),
            array(
                'field' => 'stok',
                'label' => 'Stok',
                'rules' => 'trim|required|min_length[1]'
            ),
            array(
                'field' => 'price',
                'label' => 'Harga',
                'rules' => 'trim|required|min_length[5]'
            )
        );

        // Set rules of form validation libraries
        $this->form_validation->set_rules($config);

        if($this->form_validation->run() == FALSE) {
            $this->load->view('templates/admin_header');
            $this->load->view('goods/create');
            $this->load->view('templates/admin_footer');
        } else { 
            $data = array(
                'nama' => $this->input->post('nama', TRUE),
                'jenis' => $this->input->post('jenis', TRUE),
                'brand' => $this->input->post('brand', TRUE),
                'cpu' => $this->input->post('cpu', TRUE),
                'stok' => $this->input->post('stok', TRUE),
                'price' => $this->input->post('price', TRUE)
            );

            $this->Goods->Store($data);

            redirect('goods');
        }
    }

    public function Edit($id = NULL) {
        if($id == NULL) {
            redirect('goods');
        }

        $goods = $this->Goods->Find($id);

        if($goods) {
            // Konfigurasi form validation
            $config = array(
                array(
                    'field' => 'nama',
                    'label' => 'Nama',
                    'rules' => 'trim|required|min_length[5]'
                ),
                array(
                    'field' => 'jenis',
                    'label' => 'Jenis',
                    'rules' => 'trim|required|min_length[5]'
                ),
                array(
                    'field' => 'brand',
                    'label' => 'Brand',
                    'rules' => 'trim|required'
                ),
                array(
                    'field' => 'cpu',
                    'label' => 'CPU',
                    'rules' => 'trim|required|min_length[5]'
                ),
                array(
                    'field' => 'stok',
                    'label' => 'Stok',
                    'rules' => 'trim|required|min_length[1]'
                ),
                array(
                    'field' => 'price',
                    'label' => 'Harga',
                    'rules' => 'trim|required|min_length[5]'
                )
            );

            // Set aturan form validation
            $this->form_validation->set_rules($config);

            if($this->form_validation->run() == FALSE) {
                $this->load->view('templates/admin_header');
                $this->load->view(
                    'goods/edit',
                    array(
                        'data' => $goods
                    )
                );
                $this->load->view('templates/admin_footer');
            } else { 
                $data = array(
                    'nama' => $this->input->post('nama', TRUE),
                    'jenis' => $this->input->post('jenis', TRUE),
                    'brand' => $this->input->post('brand', TRUE),
                    'cpu' => $this->input->post('cpu', TRUE),
                    'stok' => $this->input->post('stok', TRUE),
                    'price' => $this->input->post('price', TRUE)
                );

                $this->Goods->Update($id, $data);

                redirect('goods');
            }
        } else {

            redirect('goods');
        }
    }

    public function Delete($id = NULL) {
        if($id == NULL) {
            redirect('goods');
        }

        $this->Goods->Destroy($id);

        redirect('goods');
    }
}