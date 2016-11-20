<body onload="doOnLoad();">

<div class="navbar navbar-fixed-top">
	<div class="hidden-phone hidden-tablet">	
	<?php
		echo $this->Html->image('header.png');
	?>	
	</div>
      <div class="navbar-inner">
        <div class="container-fluid">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
	  <div class="hidden-desktop">
          <a class="brand" href="pages" >
		
		<?php
			echo $this->Html->image('logo.png');
		?>
		
	</a>
	  </div>          
	  
	  <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="">		
		<?php echo $this->Html->link(__('Home'), array('controller' => 'pages', 'action' => 'display', 'home')); ?>		
              </li>
	      <li class="active">
		<?php echo $this->Html->link(__('Standard System'), array('controller' => 'requirements', 'action' => 'iso')); ?>		
              </li>
	      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Document Control <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                          <li><a href="#">Internal Document</a></li>
                          <li><a href="#">External Document </a></li>
                        </ul>
                </li>
	      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Events<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                          <li><a href="#">Internal Audit</a></li>
                          <li><a href="#">External Audit </a></li>
			  <li><a href="#">Management Review </a></li>
                        </ul>
                </li>
              <li class="">
                <a href="">QA Net</a>
              </li>
              <li class="">
                <a href="">YPQ</a>
              </li>
            </ul>
          </div>	  
	  
        </div>
      </div>
    </div>
    
<div class="container-fluid">
<div class="hidden-phone hidden-tablet">
		<br/>
		<br/>
		<br/>
		<br/>
		</div>
			 <div class="row-fluid">
				<div class="span3">
					<div class="well sidebar-nav" >
					    <!--
						<div class="hidden-phone hidden-tablet">
						<script>
						var myCalendar;
						function doOnLoad() {
						myCalendar = new dhtmlXCalendarObject("calendarHere");
						myCalendar.show();}
						</script>			
						<div id="calendarHere" style="position:relative;height:250px;"></div>	
						</div>           	      
					    !-->
						<div id="myCarousel" class="carousel slide">
							<div class="carousel-inner">
								<div class="item active">
								<?php
								echo $this->Html->image('r25.png');
								?>
								
								</div>
								<div class="item">
								<?php
								echo $this->Html->image('R15.png');
								?>
								
								</div>
								<div class="item">
								<?php
								echo $this->Html->image('jupiter-z1.png');
								?>
								
								</div>
								<div class="item">
								<?php
								echo $this->Html->image('GT125.png');
								?>
								
								</div>
								<div class="item">
								<?php
								echo $this->Html->image('Fino-fi.png');
								?>	
								</div>
		  
							</div>
						</div>

					</div><!--/.well -->
				</div><!--/span-->
				
				
				
				<div class="span9">
					<div class="hero-unit">
					<center>
					<h1>Klausul ISO 9001 </h1>
					<?php echo $this->Html->link(
					$this->Html->image('iso.gif'),
					'file/ISO9001.pdf',
					array('target' => '_blank', 'escape' => false)
					);
					?>
					
					
					</center>		
					</div>         
				</div><!--/span-->
			 </div><!--/row-->
</div>
</body>