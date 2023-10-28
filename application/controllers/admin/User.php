<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("User_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["user"] = $this->User_model->getAll();
        $this->load->view("admin/users/data_user", $data);
    }

    public function add()
    {
        $login = $this->User_model;
        $validation = $this->form_validation;
        $validation->set_rules($login->rules());

        if ($validation->run()) {
            $login->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin/users/add");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/user');
       
        $login = $this->User_model;
        $validation = $this->form_validation;
        $validation->set_rules($login->rules());

        if ($validation->run()) {
            $login->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["user"] = $login->getById($id);
        if (!$data["user"]) show_404();
        
        $this->load->view("admin/users/edit", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->User_model->delete($id)) {
            redirect(site_url('admin/users/'));
        }
    }
}
