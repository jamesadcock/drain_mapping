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


                        echo  '<br>'.form_submit('submit', 'submit');
                        echo form_close();
                        ?>
                  </div>
             </div>
        </body>
</html>