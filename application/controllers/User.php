<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function register()
    {
        $this->form_validation->set_rules(
            'name',
            'Nume',
            'required|max_length[255]'
        );

        $this->form_validation->set_rules(
            'surname',
            'Prenume',
            'required|max_length[255]'
        );

        $this->form_validation->set_rules(
            'email',
            'Email',
            'required|max_length[255]|is_unique[users.email]'
        );

        $this->form_validation->set_rules(
            'password',
            'Parola',
            'required|max_length[255]'
        );
   
        $name = $this->db->escape($this->input->post('name'));
        $surname = $this->db->escape($this->input->post('surname'));
        $email = $this->db->escape($this->input->post('email'));
        $password = md5($this->db->escape($this->input->post('password')));
       
        
        if ($this->form_validation->run() == TRUE) {
            $this->user_model->create($name, $surname, $email, $password);
           
            $id = $this->db->insert_id();

            $user = $this->user_model->getUser($id);
            
            if ($user->email == $this->input->post('email')) {
            
                $this->session->set_flashdata('message', 'Utilizatorul a fost adaugat cu succes');
                $user = $this->user_model->authenticate($email, $password);
                $this->session->set_userdata('user_id', $user->id);
                // seteaza
            } 
            redirect('bilet/adauga');
        } 
         elseif ($this->form_validation->run() == FALSE AND $this->input->post('save')) {
                $this->session->set_flashdata('message', validation_errors());
           } 
        
        $this->load->view('users/create');
    }

    public function login()
    {
        $this->form_validation->set_rules(
            'email',
            'Email',
            'required|max_length[255]'
        );

        $this->form_validation->set_rules(
            'password',
            'Parola',
            'required|max_length[255]'
        );
        $email = $this->db->escape($this->input->post('email'));
        $password = md5($this->db->escape($this->input->post('password')));
        if ($this->form_validation->run() == TRUE) {

            $result =  $this->user_model->authenticate($email, $password);
           
            if ($result) {
                //$this->session->set_flashdata('message', 'Utilizatorul a fost adaugat cu succes');             
                $this->session->set_userdata('user_id', $result->id);
            }  
            redirect('bilet/adauga');
        }
        elseif ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('message', validation_errors());
        }

        $this->load->view('users/auth');
    }

    public function logout()
    {
        $this->session->unset_userdata('user_id');
       
        redirect('cont/autentificare');
    
        
    }

}
?>
