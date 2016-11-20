<?php
/**
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 */

$cakeDescription = __d('cake_dev', 'QASystems');
?>
<!DOCTYPE html>
<html>
<head>

	<?php // echo $this->Html->charset(); ?>
	<title>            
		<?php  echo $cakeDescription ?>:
		<?php  echo $this->fetch('title'); ?>
	</title>
	<meta http-equiv="refresh" content="1000">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=10; IE=9; IE=8; IE=7; IE=EDGE" />
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

	    <script>
 // event klick calendar
	var myCalendar;
	function doOnLoad() {
	    myCalendar = new dhtmlXCalendarObject({
                input: "calendar_input1",
                button: "calendar_icon1"
            });            
          myCalendar = new dhtmlXCalendarObject({
                input: "calendar_input2",
                button: "calendar_icon2"
            });            
            myCalendar = new dhtmlXCalendarObject({
                input: "calendar_input3",
                button: "calendar_icon3"
            });            
            myCalendar = new dhtmlXCalendarObject({
                input: "calendar_input4",
                button: "calendar_icon4"
            });            
	}	
        
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
        "lengthMenu": [[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]]
    });
   
    });
    });  

// event klick row
//    $(document).ready(function(){
//        $("tr").click(function(){
//            $(this).toggleClass("yellow");
//        });
//    });

// event klick back page 
function goBack() {
    window.history.back();
}
    </script>
    
    <style>
/*Icon calendar*/
        #calendar_icon1 {
            vertical-align: middle;
            cursor: pointer;
        }
        #calendar_icon2 {
            vertical-align: middle;
            cursor: pointer;
        }
        #calendar_icon3 {
            vertical-align: middle;
            cursor: pointer;
        }
        #calendar_icon4 {
            vertical-align: middle;
            cursor: pointer;
        }
        
        .yellow{
        background-color: yellow ;
        }

    	/*body{ padding: 40px 0px; }*/
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
            
            <?php echo $this->Session->flash(); ?>
            <?php echo $this->fetch('content'); ?>
        
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
  <div style="text-align: left; font-size: 10px;" class="col-xs-6 col-sm-4"><br/><br/>

      &nbsp; Created by
	<?php echo $this->Html->link(
		'Witanto',
		'mailto:nano.tanto88@gmail.com',
		array('target' => '_blank', 'escape' => false)
	);
	?>
 
  </div>
  <div style="text-align: center;" class="col-xs-6 col-sm-4">
        Quality Assurance Department
        <br/>PT. YAMAHA MOTOR PARTS MFG INDONESIA
  </div>
  <div style="text-align: right; font-size: 10px;" class="col-xs-6 col-sm-4"><br/><br/>
    
          Powered By CakePHP &nbsp;

  </div>
</div>
    
</div>
</div>
   
</body>

<?php else: ?>
<?php echo $this->Element('error');?>
<?php endif ?>
</html>
