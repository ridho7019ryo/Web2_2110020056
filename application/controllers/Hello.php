<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Hello extends CI_Controller
{
    public function index()
    {
        echo "Hello perkenalkan nama saya ridho";
    }

    public function teman()
    {
        echo 'Teman saya Zazuli';
    }

    public function hello_56()
    {
        $this->load->model('hello_model');
        $data = $this->hello_model->hello_56();
        echo $data;
    }

    public function hello_view()
    {
        $this->load->view('hello_view');
    }

    public function hello_mvc()
    {
        $this->load->model('hello_model');

        $data['mvc'] = $this->hello_model->hello_mvc();
        $data['nama'] = "Muhammad Ridho";
        $data['npm'] = "2110020056";
        $data['kelas'] = "6A Reg Pagi SI BJM";

        $this->load->view('hello_view', $data);
    }
}
