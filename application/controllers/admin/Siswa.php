<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Siswa_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["siswa"] = $this->Siswa_model->getAll();
        $this->load->view("admin/student/data_siswa", $data);
    }

    public function add()
    {
        $student = $this->Siswa_model;
        $validation = $this->form_validation;
        $validation->set_rules($student->rules());

        if ($validation->run()) {
            $student->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin/student/add");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/siswa');
       
        $student = $this->Siswa_model;
        $validation = $this->form_validation;
        $validation->set_rules($student->rules());

        if ($validation->run()) {
            $student->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["student"] = $student->getById($id);
        if (!$data["student"]) show_404();
        
        $this->load->view("admin/student/edit", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->Siswa_model->delete($id)) {
            redirect(site_url('admin/siswa/'));
        }
    }
}
