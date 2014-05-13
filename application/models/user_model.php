<?php

class User_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    public function getByCredentials($credentials) {
        $credentials['password'] = $this->encrypt->sha1($credentials['password']);

        $query = $this->db->get_where('user', array(
            'username' => $credentials['username'],
            'password' => $credentials['password'])
        );

        if (!$query->num_rows()) {
            return null;
        }

        $result = $query->result();
        $user = $result[0];

        return $user;
    }

    public function getById($id) {
        $query = $this->db->get_where('user', array('id' => $id));

        if (!$query->num_rows()) {
            return null;
        }

        $result = $query->result();
        $user = $result[0];

        return $user;
    }

    public function stripForPublic($user) {
        unset($user->password);
        unset($user->email);

        return $user;
    }

    public function isUniqueUsername($username) {
        $query = $this->db->get_where('user', array('username' => $username));
        return !$query->num_rows();
    }

    public function register($data) {
        $data->password = $this->encrypt->sha1($data->password);
        $this->db->insert('user', $data);
        
        return !!$this->db->affected_rows();
    }

}
