<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/userguide3/general/urls.html
     */
    public function index()
    {
        $this->load->view('layout/header');
        $this->load->view('login');
    }
    public function auth()
    {
    //     $config = array(
    //         array(
    //                 'field' => 'email',
    //                 'label' => 'Email',
    //                 'rules' => 'required|valid_email',
    //                 'errors' => array(
    //                     'required' => 'Masukkan email dengan benar.',
    //             ),
    //         ),
    //         array(
    //                 'field' => 'password',
    //                 'label' => 'Password',
    //                 'rules' => 'required|min_length[12]|alpha|numeric[2]',
    //                 'errors' => array(
    //                         'required' => 'You must provide a %s.',
    //                 ),
    //         ),
        // );
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[12]|alpha|numeric[2]', ['required' => 'Password harus berisi minimal 2 angka, huruf kapital dan non kapital, minimal 12 karakter']);
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        if ($this->form_validation->run() == false) {
            $this->load->view('layout/header');
            $this->load->view('register');
        } else {
            redirect('dashboard');
        }
    }
    public function register()
    {
        $this->load->view('layout/header');
        $this->load->view('register');
    }
    public function dashboard()
    {
        $this->load->view('layout/header');
        $this->load->view('dashboard');
        $this->load->view('layout/footer');
    }
    public function post()
    {
        $this->load->library('session');
        // $no = $this->input->post('no');
        // $nama = $this->input->post('nama');
        // $kota1 = $this->input->post('kota1');
        // $kota2 = $this->input->post('kota2');
        // $tgl1 = $this->input->post('tgl1');
        // $tgl2 = $this->input->post('tgl2');
        // $ket = $this->input->post('ket');
        $pending = "Pending";


        // $ses_data = [
            //             'nama'            => $no['nama'],
            //             'no'            => $no['no'],
            //             'kota1'      => $no['kota1'],
            //             'kota2'      => $no['kota2'],
            //             'tgl1'      => $no['tgl1'],
            //             'tgl2'      => $no['tgl2'],
            //             'ket'      => $no['ket'],

            //         ];
        $ses_data = [
            'nama'            => $this->input->post('no'),
            'no'            => $this->input->post('nama'),
            'kota1'      => $this->input->post('kota1'),
            'kota2'      => $this->input->post('kota2'),
            'tgl1'      => $this->input->post('tgl1'),
            'tgl2'      => $this->input->post('tgl2'),
            'ket'      => $this->input->post('ket'),
            'pending'      => $pending,

        ];
        session()->set($ses_data);
        $this->session->set_userdata($ses_data);
        return redirect('dashboard');
    }
}