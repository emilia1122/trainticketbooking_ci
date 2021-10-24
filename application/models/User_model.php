<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model
{
    public function create($name, $surname, $email, $password)
    {
        $this->db->query("
        INSERT INTO users
        (name, surname, email, password)
        VALUES ($name, $surname, $email, '$password')
    ");
    }

    public function authenticate($email, $password)
    {
        $query =  $this->db->query("
        SELECT id, email, password
        FROM users
        WHERE email = $email AND password = '$password'
        ");

        return $query->row(); 
    }

    public function isEmailAvailable($email)
    {
        $query = $this->db->query("
        SELECT email FROM users
        WHERE  email = $email
    ");
        return $query->result();
       
    }

    public function getUser($id)
    {
        $query =  $this->db->query("
        SELECT id, email
        FROM users
        WHERE id = $id
        ");
        
        return $query->row();   
    }
}
?>