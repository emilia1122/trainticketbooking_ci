<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Train extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

	public function index()
	{
        
            $data['trains'] = $this->train_model->getTrains();

		    $this->load->view('trains/index', $data);     
        
	}

    public function show()
	{
        $id = $this->uri->segment(3);

        $data['row'] = $this->train_model->getTrain($id);

		$this->load->view('trains/show', $data);
	}

    public function create()
    {
        if (isLoggedIn()) {
        $this->form_validation->set_rules(
            'train',
            'Denumire tren',
            'required|max_length[255]|is_unique[trains.train]'
        );

        $this->form_validation->set_rules(
            'type',
            'Tip tren',
            'required|max_length[255]'
        );

        $train = $this->db->escape($this->input->post('train'));
        $type = $this->db->escape($this->input->post('type'));

        if ($this->form_validation->run() == TRUE) {
            $result = $this->train_model->create($train, $type);

            if ($result) {
                $this->session->set_flashdata('message', 'Trenul a fost adaugat cu succes');
            }

            redirect('tren');
        }
        elseif ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('message', validation_errors());
        }

        $this->load->view('trains/create');
        } else {
            redirect('cont/adauga');
        }
    }
    
    public function edit()
    {
        if (isLoggedIn()) {
        $this->form_validation->set_rules(
            'train',
            'Denumire tren',
            'required|max_length[255]|is_unique[trains.train]'
        );

        $this->form_validation->set_rules(
            'type',
            'Tip tren',
            'required|max_length[255]'
        );

        $id = $this->uri->segment(3);
        $train = $this->db->escape($this->input->post('train'));
        $type = $this->db->escape($this->input->post('type'));

           
        if ($this->form_validation->run() == TRUE) {
            $result = $this->train_model->edit($id, $train, $type);
        
            if ($result) {
                $this->session->set_flashdata('message', 'Trenul a fost editat cu succes');
            }

            redirect('tren');
        }
        elseif ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('message', validation_errors());
        }

        $data['row'] = $this->train_model->getTrain($id);

        $this->load->view('trains/edit', $data);
        } else {
            redirect('cont/adauga');
        }

    }

    public function delete()
    {
        if (isLoggedIn()) {
        $id = $this->uri->segment(3);
        
        $result = $this->train_model->delete($id);

        if ($result) {
            $this->session->set_flashdata('message', 'Trenul a fost sters cu succes');
        } else {
            $this->session->set_flashdata('message', 'A intervenit o eroare la stergerea trenului');
        }

        redirect('tren');
        } else {
            redirect('cont/adauga');
        }
    }
}
