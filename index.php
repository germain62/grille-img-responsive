<?php

 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" title="no title">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Grille img responsive</title>
    <style>
    *{
      margin : 0;
      padding : 0;
      overflow-x: hidden;
    }
    img{
      height: 300px;
      width: 300px;
    }
    img:hover{
     opacity: 0.7;
    }
    </style>

  </head>

  <body>

    <div class="container-fluid">
      <div class="row">
      <?php
        for ($i=1;$i<11;$i++){
          echo '<div class="col-md-3 col-sm-4 col-xs-6">
            <img src="images/img'.$i.'.jpg">
          </div>';
        }
       ?>
     </div>


   </div>

 </body>
 </html>
