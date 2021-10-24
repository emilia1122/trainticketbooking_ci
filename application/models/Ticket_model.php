<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Ticket_model extends CI_Model
{
    public function getTickets()
    {
        $query = $this->db->query("
        SELECT
        t.id,
        t.id,
        tr.train,
        d.first_station,
        d.final_station
    FROM
        tickets AS t
    LEFT JOIN trains AS tr
    ON
        tr.id = t.train_id
    LEFT JOIN destinations AS d
    ON
        d.id = t.destination_id;
        ");

        return $query->result();

    }
    public function getTicket($id)
    {
        $query = $this->db->query("
        SELECT
        t.id,
        t.train_id,
        t.destination_id,
        tr.train,
        d.first_station,
        d.final_station
        FROM
            tickets AS t
        LEFT JOIN trains AS tr
        ON
            tr.id = t.train_id
        LEFT JOIN destinations AS d
        ON
            d.id = t.destination_id
        WHERE t.id = $id
        ");

        return $query->row();
    
    }
    public function create($user_id, $train_id, $destination_id)
    {
        $this->db->query("
            INSERT INTO tickets
            (user_id, train_id, destination_id)
            VALUES ($user_id, $train_id, $destination_id)
        ");

    }
    public function delete($id)
    {
        $this->db->query("
        DELETE FROM tickets 
        WHERE id = $id
        ");
    }
}
?>