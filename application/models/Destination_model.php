<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Destination_model extends CI_Model 
{
    public function getDestinations()
    {
        $query = $this->db->query("
            SELECT * FROM destinations
        ");

        return $query->result();
    }

    public function getDestination($id)
    {
        $query = $this->db->query("
            SELECT * FROM destinations
            WHERE id = $id
        ");

        return $query->row();
    }

    public function create($first_station, $final_station)
    {
        $this->db->query("
            INSERT INTO destinations
            (first_station, final_station)
            VALUES ($first_station, $final_station)
        ");
    }

    public function edit($id, $first_station, $final_station)
    {
        $this->db->query("
        UPDATE destinations
        SET first_station = $first_station, final_station = $final_station 
        WHERE id = $id
        ");
    }
  
    public function delete($id)
    {
        $this->db->query("
        DELETE FROM destinations 
        WHERE id = $id
        ");
    }

   
}