<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Train_model extends CI_Model 
{
    public function getTrains()
    {
        $query = $this->db->query("
            SELECT * FROM trains
        ");

        return $query->result();
    }

    public function getTrain($id)
    {
        $query = $this->db->query("
            SELECT * FROM trains
            WHERE id = $id
        ");

        return $query->row();
    }

    public function create($train, $type)
    {
        $this->db->query("
            INSERT INTO trains
            (train, type)
            VALUES ($train, $type)
        ");
    }

    public function edit($id, $train, $type)
    {
        $this->db->query("
        UPDATE trains
        SET train = $train, type = $type WHERE id = $id
        ");
    }

    public function delete($id)
    {
        $this->db->query("
        DELETE FROM trains WHERE id = $id
        ");
    }
}