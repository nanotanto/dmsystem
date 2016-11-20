<?php
/**
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 */

//$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=10; IE=9; IE=8; IE=7; IE=EDGE" />
	<?php // echo $this->Html->charset(); ?>
	<title>
            
		<?php // echo $cakeDescription ?>:
		<?php // echo $this->fetch('title'); ?>
	</title>

	<?php
		echo $this->Html->meta('icon');
                
                
                echo $this->Html->css('../bootstrap/css/bootstrap.min_1');
                echo $this->Html->css('datepicker3');
                echo $this->Html->css('styles');
                echo $this->Html->css('../dhtmlx/dhtmlx');
		echo $this->Html->css('TableCSSCode');	
                echo $this->Html->css('dataTables.autoFill');
                echo $this->Html->css('jquery.dataTables');
                
                echo $this->Html->script('jquery-1.11.1.min');
                echo $this->Html->script('../bootstrap/js/bootstrap.min');
                echo $this->Html->script('bootstrap-datepicker');
                echo $this->Html->script('html5shiv.min');
		echo $this->Html->script('respond.min');
                echo $this->Html->script('../dhtmlx/dhtmlx');
                echo $this->Html->script('fixedheadertable');
                echo $this->Html->script('jquery.floatThead.min');
                echo $this->Html->script('dataTables.autoFill');
                echo $this->Html->script('jquery.dataTables');
                echo $this->Html->script('angular.min.js');
                
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
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
<?php
      $tgl="2016-12-31";
      $selisih=(strtotime($tgl)-strtotime(date("Y-m-d")))/(60*60*24);
?>
<?php if ($selisih > 0) : ?>

<!--<body onload="doOnLoad()">-->
<body>

        <?php echo $this->Element('nav'); ?> 
    	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
            <?php echo $this->fetch('content'); ?>
            <div style="text-align: center; font-size: 20px; color: red;" >  
                <?php echo $this->Session->flash(); ?>
            </div>

            
			
	<script>
		$('#calendar').datepicker({
		});

		!function ($) {
		    $(document).on("click","ul.nav li.parent > a > span.icon", function(){          
		        $(this).find('em:first').toggleClass("glyphicon-minus");      
		    }); 
		    $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
                
                // Fix header table
    $(document).ready(function () {      
       $(function(){
        $("table.table").floatThead({
            scrollingTop: pageTop,
            useAbsolutePositioning: false,
            scrollContainer: function($table){
                return $table.closest(".CSSTableGenerator");
            }
            
        });
    $('#example').DataTable({
		"language": {
			           "emptyTable": "Please select category document"
			         },
        "lengthMenu": [[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]],
                "order": [0,'desc']
    });
   
    });
    });  
	</script>	
	
<?php echo $scripts_for_layout; ?>
<!-- Js writeBuffer -->
<?php
if (class_exists('JsHelper') && method_exists($this->Js, 'writeBuffer')) echo $this->Js->writeBuffer();
// Writes cached scripts
?>

<div class="breadcrumb navbar-fixed-bottom">

 <div class="row">
  <div style="text-align: left; font-size: 10px;" class="col-xs-6 col-sm-4">

      &nbsp; Created by
	<?php echo $this->Html->link(
		'Witanto',
		'mailto:nano_tanto@yahoo.co.id',
		array('target' => '_blank', 'escape' => false)
	);
	?>
 
  </div>
     
  
  <div style="text-align: center; font-size: 10px;" class="col-xs-6 col-sm-4">
  </div>
  <div style="text-align: right; font-size: 10px; color: red;" class="col-xs-6 col-sm-4">
     Free Trial Expired In  <?php echo $selisih; ?> Days. 
  </div>
     

</div>
    
</div>
</div>
   
</body>

<?php else: ?>
<?php echo $this->Element('error');?>
<?php endif ?>
</html>