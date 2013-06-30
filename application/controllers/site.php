<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {

    public function index()
    {
        $data=$this->showMap();
        $data['heading']='Reports';
        $this->load->view('view_head',$data);
        $this->load->view('view_reports',$data);
    }

    public function addRecord()
    {

        $data=array();
        $data['heading']='Add Record';
        $this->load->view('view_add_record',$data);
    }


    function showMap()
    {


        $this->load->model('get_db');
        $this->load->model('maps');
        $config=array();
        $config['center']='53 38 33N, 1 46 67W';
        $config['zoom']='auto';

        $this->maps->initializeMap($config);

        $query=$this->get_db->getMapInfo(); // gets marker positions and text box values from db.
        $this->maps->addMarkers($query);

        $data['map'] = $this->maps->returnMap();
        return $data;

    }


    function insertValues()
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


    function  showLastLocation($id)
    {
        $this->load->model('get_db');
        $this->load->model('maps');
        $config=array();
        $config['center']='53 38 33N, 1 46 67W';
        $config['zoom']='auto';
        $this->maps->initializeMap($config);
        $query=$this->get_db->getLastRecord($id);
        $this->maps->addMarkers($query);
        $data['map'] = $this->maps->returnMap();
        $data['heading']='Record Added';
        $this->load->view('view_head',$data);
        $this->load->view('view_confirm_record',$data);

    }
}
