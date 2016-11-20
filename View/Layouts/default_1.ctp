
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="refresh" content="1000">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=10; IE=9; IE=8; IE=7; IE=EDGE" />
	
    <?php 
	
	echo $this->Html->script('jquery-1.11.1.min');
	echo $this->Html->script('html5shiv');
	
	;?>

    <style type="text/css" media="print">
body {display:none;visibility:hidden;}
</style>
    
	    <style>
         body {
        height: 100%;
        margin: 0px;
    }
    .panel{
        height: 100%;
    }
    
    iframe {
    display: block;       /* iframes are inline by default */
    background: #000;
    border: none;         /* Reset default border */
    width: 100%;
    height: 100%;
    }
    
    </style>
	
</head>
<body>



    <div class="container">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>

    </div><!-- /.container -->

  </body>
</html>
