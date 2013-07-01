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
        $config['center']='53.404531,-1.3908';
        $config['zoom']='auto';
        $this->maps->initializeMap($config);

        $query=$this->get_db->getMapInfo(); // gets marker positions and text box values from db.
        $this->maps->addMarkers($query);
        $this->maps->addPolylines($query);
        $data['map'] = $this->maps->returnMap();
        return $data;

    }


    function insertValues()
    {


        $form_data = array(
            'start_gps'=>$this->input->post('start_gps'),
            'end_gps'=>$this->input->post('end_gps'),
            'drain_length'=>$this->input->post('drain_length'),
            'drain_width'=>$this->input->post('drain_width'),
            'distance_from_carriageway'=>$this->input->post('distance_from_carriageway'),
            'visual_grade_drain'=>$this->input->post('visual_grade_drain'),
            'height_drain_vegetation'=>$this->input->post('height_drain_vegetation'),
            'grass_batter'=>$this->input->post('grass_batter'),
            'comments'=>$this->input->post('comments'),
            'kerb_start'=>$this->input->post('kerb_start'),
            'kerb_finish'=>$this->input->post('kerb_finish'),
            'barrier_start'=>$this->input->post('barrier_start'),
            'barrier_finish'=>$this->input->post('barrier_finish'),
            'barrier_length'=>$this->input->post('barrier_length'),
            'barrier_comments'=>$this->input->post('barrier_comments'),
            'runoff_start'=>$this->input->post('runoff_start'),
            'runoff_finish'=>$this->input->post('runoff_finish'),
            'runoff_length'=>$this->input->post('runoff_length'),
            'runoff_width'=>$this->input->post('runoff_width'),
            'runoff_height'=>$this->input->post('runoff_height'),
            'run_off_veg_height'=>$this->input->post('run_off_veg_height'),
            'overheads'=>$this->input->post('overheads'),
            'photo'=>$this->input->post('photo'),
            'video_start'=>$this->input->post('video_start'),
            'video_finish'=>$this->input->post('video_finish'),
            'any_relative_gps'=>$this->input->post('any_relative_gps')
        );

        $this->load->model('get_db');
        $this->get_db->insertValues($form_data);
        $this->index();


      //  $id = $this->db->insert_id();
       // $this->showLastLocation($id);

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
