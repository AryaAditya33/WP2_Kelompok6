<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model
{
    private $_table = "user";

    public $id_user;
    public $name;
    public $email;
    public $username;
    public $password;
    public $password_r;
    public $avatar;
    public $created_at;
    public $last_login;

    public function rules()
    {
        return [
            ['field' => 'id_user',
            'label' => 'Id_user',
            'rules' => 'numeric'],

            ['field' => 'name',
            'label' => 'Name',
            'rules' => 'required'],
            
            ['field' => 'email',
            'label' => 'Email',
            'rules' => 'required'],

            ['field' => 'username',
            'label' => 'Username',
            'rules' => 'required'],

            ['field' => 'password',
            'label' => 'Password',
            'rules' => 'required'],

            ['field' => 'password_r',
            'label' => 'Password_r',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_user" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_user = $post["id_user"];
        $this->name = $post["name"];
        $this->email = $post["email"];
        $this->username = $post["username"];
        $this->password = $post["password"];
        $this->password_r = $post["password_r"];
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->name = $post["name"];
        $this->email = $post["email"];
        $this->username = $post["username"];
        $this->password = $post["password"];
        $this->password_r = $post["password_r"];
        $this->db->update($this->_table, $this, array('id_user' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_user" => $id));
    }
}
