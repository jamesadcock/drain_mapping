<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Mapping</title>
        <link type="text/css" rel="stylesheet" href="<?php echo base_url()?>application/resources/css/main.css">
    </head>

    <body>
    <div id="container">
        <?php echo heading($heading);?>
        <div id="nav_menu"> <a href="<?php echo base_url()?>index.php/site/addRecord">Add Record</a> </div> <!--remove index.php when mod_rewrite -->
                     <div id="body">
                        <?php
                         $this->load->helper('form');
                         echo form_open('site/insertValues');

                         echo form_label('Drain Marker Start GPS','start_gps' ).'<br>';
                         $start_gps = array(
                             'name' => 'start_gps',
                             'id'=> 'start_gps',
                             'value'=> ''
                         );
                         echo form_input($start_gps).'<br> <br>';

                        echo form_label('Drain Marker End GPS','start_gps' ).'<br>';
                        $end_gps = array(
                            'name' => 'end_gps',
                            'id'=> 'end_gps',
                            'value'=> ''
                        );
                        echo form_input($end_gps).'<br> <br>';

                        echo form_label('Drain Length','drain_length' ).'<br>';
                        $drain_length = array(
                            'name' => 'drain_length',
                            'id'=> 'drain_length',
                            'value'=> ''
                        );
                        echo form_input($drain_length).'<br> <br>';

                        echo form_label('Drain Width','drain_width').'<br>';
                        $drain_width = array(
                            'name' => 'drain_width',
                            'id'=> 'drain_width',
                            'value'=> ''
                        );
                        echo form_input($drain_width).'<br> <br>';

                        echo form_label('Distance from carriageway','distance_carriageway' ).'<br>';
                        $distance_carriageway = array(
                            'name' => 'distance_carriageway',
                            'id'=> 'distance_carriageway',
                            'value'=> ''
                        );
                        echo form_input($distance_carriageway).'<br> <br>';

                        echo form_label('Visual Grade of Drain','visual_grade_drain' ).'<br>';
                        $visual_grade_drain = array(
                            'name' => 'visual_grade_drain',
                            'id'=> 'visual_grade_drain',
                            'value'=> ''
                        );
                        echo form_input($visual_grade_drain).'<br> <br>';

                        echo form_label('Height of Drain Vegetation','height_drain_vegetation' ).'<br>';
                        $height_drain_vegetation= array(
                            'name' => 'height_drain_vegetation',
                            'id'=> 'height_drain_vegetation',
                            'value'=> ''
                        );
                        echo form_input($height_drain_vegetation).'<br> <br>';

                        echo form_label('Grass batter','grass_batter' ).'<br>';
                        $grass_batter = array(
                            'name' => 'grass_batter',
                            'id'=> 'grass_batter',
                            'value'=> ''
                        );
                        echo form_input($grass_batter).'<br> <br>';

                        echo form_label('Comments','comments' ).'<br>';
                        $comments = array(
                            'name' => 'comments',
                            'id'=> 'comments',
                            'value'=> ''
                        );
                        echo form_input($comments).'<br> <br>';

                        echo form_label('Kerb Start','kerb_start' ).'<br>';
                        $kerb_start = array(
                            'name' => 'kerb_start',
                            'id'=> 'kerb_start',
                            'value'=> ''
                        );
                        echo form_input($kerb_start).'<br> <br>';

                        echo form_label('Kerb Finish','kerb_finish' ).'<br>';
                        $kerb_finish = array(
                            'name' => 'kerb_finish',
                            'id'=> 'kerb_finish',
                            'value'=> ''
                        );
                        echo form_input($kerb_finish).'<br> <br>';

                        echo form_label('Barrier Location Start','barrier_start' ).'<br>';
                        $barrier_start = array(
                            'name' => 'barrier_start',
                            'id'=> 'barrier_start',
                            'value'=> ''
                        );
                        echo form_input($barrier_start).'<br> <br>';

                        echo form_label('Barrier Location Finish','barrier_finish' ).'<br>';
                        $barrier_finish = array(
                            'name' => 'barrier_finish',
                            'id'=> 'barrier_finish',
                            'value'=> ''
                        );
                        echo form_input($barrier_finish).'<br> <br>';

                        echo form_label('Barrier Length','barrier_length' ).'<br>';
                        $barrier_length = array(
                            'name' => 'barrier_length',
                            'id'=> 'barrier_length',
                            'value'=> ''
                        );
                        echo form_input($barrier_length).'<br> <br>';

                        echo form_label('Barrier Interference Comments','barrier_comments' ).'<br>';
                        $barrier_comments = array(
                            'name' => 'barrier_comments',
                            'id'=> 'barrier_comments',
                            'value'=> ''
                        );
                        echo form_input($barrier_comments).'<br> <br>';

                        echo form_label('Runoff Start Location','runoff_start' ).'<br>';
                        $runoff_start = array(
                            'name' => 'runoff_start',
                            'id'=> 'runoff_start',
                            'value'=> ''
                        );
                        echo form_input($runoff_start).'<br> <br>';

                        echo form_label('Runoff Finish Location','runoff_finish' ).'<br>';
                        $runoff_finish = array(
                            'name' => 'runoff_finish',
                            'id'=> 'runoff_finish',
                            'value'=> ''
                        );
                        echo form_input($runoff_finish).'<br> <br>';

                        echo form_label('Runoff Length','runoff_length' ).'<br>';
                        $runoff_length = array(
                            'name' => 'runoff_length',
                            'id'=> 'runoff_length',
                            'value'=> ''
                        );
                        echo form_input($runoff_length).'<br> <br>';

                        echo form_label('Runoff Width','runoff_width' ).'<br>';
                        $runoff_width = array(
                            'name' => 'runoff_width',
                            'id'=> 'runoff_width',
                            'value'=> ''
                        );
                        echo form_input($runoff_width).'<br> <br>';

                        echo form_label('Runoff Height','runoff_height' ).'<br>';
                        $runoff_height = array(
                            'name' => 'runoff_height',
                            'id'=> 'runoff_height',
                            'value'=> ''
                        );
                        echo form_input($runoff_height).'<br> <br>';

                        echo form_label('Runoff Vegetation Height ','run_off_veg_height' ).'<br>';
                        $run_off_veg_height = array(
                            'name' => 'run_off_veg_height',
                            'id'=> 'run_off_veg_height',
                            'value'=> ''
                        );
                        echo form_input($run_off_veg_height).'<br> <br>';

                        echo form_label('Overheads','overheads' ).'<br>';
                        $overheads = array(
                            'name' => 'overheads',
                            'id'=> 'overheads',
                            'value'=> ''
                        );
                        echo form_input($overheads).'<br> <br>';

                        echo form_label('Photo','photo' ).'<br>';
                        $photo = array(
                            'name' => 'photo',
                            'id'=> 'photo',
                            'value'=> ''
                        );
                        echo form_input($photo).'<br> <br>';

                        echo form_label('Video Start','video_start' ).'<br>';
                        $video_start = array(
                            'name' => 'video_start',
                            'id'=> 'video_start',
                            'value'=> ''
                        );
                        echo form_input($video_start).'<br> <br>';

                        echo form_label('Video Finish','video_finish' ).'<br>';
                        $video_finish = array(
                            'name' => 'video_finish',
                            'id'=> 'video_finish',
                            'value'=> ''
                        );
                        echo form_input($video_finish).'<br> <br>';

                        echo form_label('Other GPS locations','gps_locations' ).'<br>';
                        $gps_locations = array(
                            'name' => 'gps_locations',
                            'id'=> 'gps_locations',
                            'value'=> ''
                        );
                        echo form_input($gps_locations).'<br> <br>';


                        echo  '<br>'.form_submit('submit', 'submit');
                        echo form_close();
                        ?>
                  </div>
             </div>
        </body>
</html>