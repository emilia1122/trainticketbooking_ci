<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Destination extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

	public function index()
	{
        $data['destinations'] = $this->destination_model->getDestinations();

		$this->load->view('destinations/index', $data);
	}

    public function show()
	{
        $id = $this->uri->segment(3);

        $data['row'] = $this->destination_model->getDestination($id);

		$this->load->view('destinations/show', $data);
	}

    public function create()
    {
        if (isLoggedIn()) {
        $this->form_validation->set_rules(
            'first_station',
            'Destinatia initiala',
            'required|max_length[255]|is_unique[destinations.first_station]'
        );

        $this->form_validation->set_rules(
            'final_station',
            'Destinatia finala',
            'required|max_length[255]|is_unique[destinations.final_station]'
        );

        $first_station = $this->db->escape($this->input->post('first_station'));
        $final_station= $this->db->escape($this->input->post('final_station'));

        if ($this->form_validation->run() == TRUE) {
            $result = $this->destination_model->create($first_station, $final_station);

            if ($result) {
                $this->session->set_flashdata('message', 'Ruta a fost adaugata cu succes');
            }

            redirect('ruta');
        }
        elseif ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('message', validation_errors());
        }

        $this->load->view('destinations/create');
        } else {
            redirect('cont/adauga');
        }
    }

    public function edit()
    {
        if (isLoggedIn()) {
        $this->form_validation->set_rules(
            'first_station',
            'Prima statie',
            'required|max_length[255]'
        );

        $this->form_validation->set_rules(
            'final_station',
            'Ultima statie',
            'required|max_length[255]'
        );

        $id = $this->uri->segment(3);
        $first_station = $this->db->escape($this->input->post('first_station'));
        $final_station = $this->db->escape($this->input->post('final_station'));

           
        if ($this->form_validation->run() == TRUE) {
            $result = $this->destination_model->edit($id, $first_station, $final_station);
        
            if ($result) {
                $this->session->set_flashdata('message', 'Ruta a fost editata cu succes');
            }

            redirect('ruta');
        }
        elseif ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('message', validation_errors());
        }

        $data['row'] = $this->destination_model->getDestination($id);

        $this->load->view('destinations/edit', $data);
        } else {
            redirect('cont/adauga');
        }
    }

    public function delete()
    {
        if (isLoggedIn()) {
        $id = $this->uri->segment(3);
        
        $result = $this->destination_model->delete($id);

        if ($result) {
            $this->session->set_flashdata('message', 'Ruta a fost stearsa cu succes');
        } else {
            $this->session->set_flashdata('message', 'A intervenit o eroare la stergerea rutei');
        }

        redirect('ruta');
        } else {
            redirect('cont/adauga');
        }
    }
}

    
    

