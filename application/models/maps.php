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
            $marker['position']= $row->start_gps;

            $marker['infowindow_content']='Start GPS: '.$row->start_gps.
                '<br>End GPS: '.$row->end_gps.
                '<br>Drain Length: '.$row->drain_length.
                '<br>Drain Width: '.$row->drain_width.
                '<br>Distance from carriageway: '.$row->distance_from_carriageway.
                '<br>Visual grade of drain: '.$row->visual_grade_drain.
                '<br>Height of drain vegetation: '.$row->visual_grade_drain.
                '<br>Grass Batter: '.$row->Grass_batter.
                '<br>Comments: '.$row->comments.
                '<br>Kerb Start: '.$row->kerb_start.
                '<br>Kerb Finish: '.$row->kerb_finish.
                '<br>Kerb Length: '.$row->kerb_length.
                '<br>Barrier Start: '.$row->barrier_start.
                '<br>Barrier Finish: '.$row->barrier_finish.
                '<br>Barrier Length: '.$row-> 	barrier_length.
                '<br>barrier Comments: '.$row->barrier_comments.
                '<br>Runoff Start: '.$row-> runoff_start.
                '<br>Runoff Finish: '.$row->runoff_finish.
                '<br>Runoff Length: '.$row->runoff_length.
                '<br>Runoff Width '.$row->runoff_width.
                '<br>Runoff Height: '.$row->runoff_height.
                '<br>Overheads: '.$row->overheads.
                '<br>Photo: '.$row->photo.
                '<br>Video Start: '.$row->video_start.
                '<br>Video Finish: '.$row->video_finish.
                '<br>Any Relative GPS: '.$row->any_relative_gps;





            $this->googlemaps->add_marker($marker);
            $marker['position']= $row->end_gps;
            $this->googlemaps->add_marker($marker);

        }

        $data['map'] = $this->googlemaps->create_map();
        return $data;
    }


    function addPolylines($query)
    {
        $polyline = array();



        foreach ($query->result() as $row)
        {
            $polyline['points'] = array($row->start_gps, $row->end_gps);
            $polyline['strokeColor']='#458B00';
            $polyline['strokeWeight']='5';
            $this->googlemaps->add_polyline($polyline);

        }

    }






    function returnMap()
    {
        $data = $this->googlemaps->create_map();
        return $data;
    }
}