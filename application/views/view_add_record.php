
                 <div id="body">
                    <?php
                        $this->load->helper('form');
                        echo form_open('site/insertValues');
                        echo form_label('GPS Co-ordinate','coordinate' ).'<br>';

                        $data1 = array(
                            'name' => 'coordinate',
                            'id'=> 'coordinate',
                            'value'=> ''
                        );
                        echo form_input($data1);

                        echo '<br>'.form_label('Note','Note' ).'<br>';

                        $data3 = array(
                            'name' => 'note',
                            'id'=> 'note',
                            'value'=> ''
                        );
                        echo form_textarea($data3);
                        echo '<br>'.form_label('Drain Length','drain_length' ).'<br>';

                        $data1 = array(
                            'name' => 'drain_length',
                            'id'=> 'drain_length',
                            'value'=> ''
                        );
                        echo form_input($data1);

                        echo '<br>'.form_label('Drain Width','drain_with' ).'<br>';

                        $data1 = array(
                            'name' => 'drain_width',
                            'id'=> 'drain_width',
                            'value'=> ''
                        );
                        echo form_input($data1);
                        echo  '<br>'.form_submit('submit', 'submit');
                        echo form_close();
                    ?>
              </div>
         </div>
    </body>
</html>