<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ticket extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

	public function index()
	{
        $data['tickets'] = $this->ticket_model->getTickets();

		$this->load->view('tickets/index', $data);
	}

    public function create()
    {
        if (isLoggedIn()) {
        $this->form_validation->set_rules(
            'train',
            'Tren id',
            'required|max_length[255]'
        );

        $this->form_validation->set_rules(
            'destination',
            'Destinatie id',
            'required|max_length[255]'
        );

        $data['trains'] = $this->train_model->getTrains();
        $data['destinations'] = $this->destination_model->getDestinations();
   
        $train = $this->db->escape($this->input->post('train'));
        $destination = $this->db->escape($this->input->post('destination'));
        if(isLoggedIn()) {
            $user_id = $this->session->userdata['user_id'];
        }
        if ($this->form_validation->run() == TRUE) {
            $result = $this->ticket_model->create($user_id, $train, $destination);

            if ($result) {
                $this->session->set_flashdata('message', 'Biletul a fost adaugat cu succes');
            }

            redirect('bilet');
        }
        elseif ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('message', validation_errors());
        }

        $this->load->view('tickets/create', $data);
        }
        else {
            redirect('cont/adauga');
        }
    }

    public function delete()
    {
        if (isLoggedIn()) {
        $id = $this->uri->segment(3);
        
        $result = $this->ticket_model->delete($id);

        if ($result) {
            $this->session->set_flashdata('message', 'Biletul a fost sters cu succes');
        } else {
            $this->session->set_flashdata('message', 'A intervenit o eroare la stergerea biletului');
        }

        redirect('bilet');
       } else {
           redirect('cont/adauga');
       }
    }

}
?>
