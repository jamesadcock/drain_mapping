<?php

class Maps extends CI_Model
{

    function initializeMap($config)
    {

        $this->load->library('googlemaps');
        $this->googlemaps->initialize($config);

    }

    function addMarkers($query)
    {
        $marker=array();
        foreach ($query->result() as $row)
        {
            $marker['position']= $row->coordinate;
            $marker['infowindow_content']=$row->note;
            $this->googlemaps->add_marker($marker);
        }

        $data['map'] = $this->googlemaps->create_map();
        return $data;
    }


    function returnMap()
    {
        $data = $this->googlemaps->create_map();
        return $data;
    }
}