<?php

class Get_db extends CI_Model
{

    function getMapInfo()
    {
        $query = $this->db->get('drains');
        return $query;

    }

    function insertValues($data)
    {
       $this->db->insert('drains',$data);
    }

    function getLastRecord($id)
    {
        $this->db->select('start_gps,end_gps')->from('drains')->where('id', $id);
        $query = $this->db->get();
        return $query;
    }


}