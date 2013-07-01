<!DOCTYPE html>
<html lang="en">
    <head>
            <meta charset="utf-8">
            <title>Mapping</title>
            <link type="text/css" rel="stylesheet" href="<?php echo base_url()?>application/resources/css/main.css">
            <?php
                 echo $map['js'];
            ?>
    </head>

    <body>
         <div id="container">
                <?php echo heading($heading);?>
           <div id="nav_menu"> &nbsp &nbsp &nbsp <a href="<?php echo base_url()?>index.php/site/addRecord">Add Record</a> </div> <!--remove index.php when mod_rewrite -->