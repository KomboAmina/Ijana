<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo ucwords($this->route);?> &rarr; <?php echo APPNAME;?></title>
    <link href="<?php echo URL;?>vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="<?php echo URL;?>public/css/styles.css" rel="stylesheet"/>
  </head>
  <body>
    
    <main class="container-fluid pt-4">

        <div class="row justify-content-center">

            <div class="col-sm-12 col-md-9">

                <!--nav-->

                <div class="row justify-content-start">

                    <div class="col-sm-12 col-md-2">

                    <div class="container">
                        <a href="<?php echo URL;?>home/<?php echo $navLink;?>">
                        <img src="<?php echo URL;?>public/img/logo.png"
                        height="50px"
                        alt="logo for Ijana"
                        style="margin-top:-15px;"/></a>
                    </div>

                    </div>

                    <div class="col-sm-12 col-md-10">

                        <?php

                        include "src".DS."common".DS."navtabs.php";
                        
                        ?>

                    </div>

                </div>

                <!--nav-->

                
