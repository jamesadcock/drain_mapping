<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {

    public function index()
    {
        $data=$this->showMap();
        $this->load->view('view_add_record',$data);

    }


    public function insertValues()
    {


        $form_data = array(
            'coordinate'=>$this->input->post('coordinate'),
            'note'=>$this->input->post('note')
        );

        $this->load->model('get_db');
        $this->get_db->insertValues($form_data);
        $id = $this->db->insert_id();
        $this->showLastLocation($id);

    }

    function showMap()
    {

        $this->load->model('get_db');
        $this->load->library('googlemaps');

        $config=array();
        $config['center']='53 38 33N, 1 46 67W';
        $config['zoom']='auto';
        $this->googlemaps->initialize($config);


        $query=$this->get_db->getMapInfo();
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




    function  showLastLocation($id)
    {



        $this->load->model('get_db');
        $this->load->library('googlemaps');

        $config=array();
        $config['center']='53 38 33N, 1 46 67W';
        $config['zoom']='auto';
        $this->googlemaps->initialize($config);


        $query=$this->get_db->getLastRecord($id);
        $marker=array();
        foreach ($query->result() as $row)
        {
            $marker['position']= $row->coordinate;
            $marker['infowindow_content']=$row->note;
            $this->googlemaps->add_marker($marker);
        }




        $data['map'] = $this->googlemaps->create_map();
        $this->load->view('view_add_record',$data);



    }
}
