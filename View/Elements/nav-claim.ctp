<!--<script>
var url = window.location;
// Will only work if string in href matches with location
$('ul.nav a[href="' + url + '"]').parent().addClass('active');
// Will also work for relative and absolute hrefs
$('ul.nav a').filter(function() {
    return this.href == url;
}).parent().addClass('active');
 </script>   -->
   		<div class="row">
			<ol class="breadcrumb">
				<li><a href="chart"><span class="glyphicon glyphicon-stats"></span></a></li>
				<li class="active">Customer Claim</li>
			</ol>
		</div><!--/.row-->
                <p></p>
<div class="panel panel-default">
      <div class="container">

        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">  
              <li>
			  <?php echo $this->Html->link(__('Regular Claims'), array('controller' => 'claims', 'action' => 'index')); ?>		
			</li>
			
               <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Head Cylinder<b class="caret"></b></a>
                        <ul class="dropdown-menu">
			<li>
			  <?php echo $this->Html->link(__('Regular Claim HC'), array('controller' => 'claims', 'action' => 'index' , 2)); ?>		
			</li>
			<li>
			  <?php echo $this->Html->link(__('CQR HC belum dijawab'), array('controller' => 'claims', 'action' => 'cqr', 2)); ?>		
			</li>
			<li class="">
			  <?php echo $this->Html->link(__('C/M H+2 HC belum dijawab'), array('controller' => 'claims', 'action' => 'h2', 2)); ?>
			</li>
                        <li class="">
			  <?php echo $this->Html->link(__('C/M H+7 HC belum dijawab'), array('controller' => 'claims', 'action' => 'h7', 2)); ?>
			</li>

                        </ul>
                </li>
                <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Cast Wheel<b class="caret"></b></a>
                        <ul class="dropdown-menu">
			<li class="">
			  <?php echo $this->Html->link(__('Regular Claim CW'), array('controller' => 'claims', 'action' => 'index' , 3)); ?>		

                        </li>
                                <li>
                                    <?php echo $this->Html->link(__('Raw Part Claim CW'), array('controller' => 'claims', 'action' => 'cw_raw')); ?>		
                                </li>
                                <li>
                                    <?php echo $this->Html->link(__('Gravity Claim CW'), array('controller' => 'claims', 'action' => 'cw_grav')); ?>		
                                </li>
			<li>
			  <?php echo $this->Html->link(__('CQR CW belum dijawab'), array('controller' => 'claims', 'action' => 'cqr' , 3)); ?>		
			</li>
			<li class="dropdown-submenu">
			  <?php echo $this->Html->link(__('C/M H+2 CW belum dijawab'), array('controller' => 'claims', 'action' => 'h2', 3)); ?>
			    <ul class="dropdown-menu">
                                <li>
                                    <?php echo $this->Html->link(__('C/M H+2 Regular Claim CW belum dijawab'), array('controller' => 'claims', 'action' => 'h2_cw', 1)); ?>		
                                </li>
                                <li>
                                    <?php echo $this->Html->link(__('C/M H+2 Raw Part Claim CW belum dijawab'), array('controller' => 'claims', 'action' => 'h2_cw', 2)); ?>		
                                </li>
                                <li>
                                    <?php echo $this->Html->link(__('C/M H+2 Gravity Claim CW belum dijawab'), array('controller' => 'claims', 'action' => 'h2_cw', 3)); ?>		
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown-submenu">
			  <?php echo $this->Html->link(__('C/M H+7 CW belum dijawab'), array('controller' => 'claims', 'action' => 'h7', 3)); ?>
			<ul class="dropdown-menu">
                                <li>
                                    <?php echo $this->Html->link(__('C/M H+7 Regular Claim CW belum dijawab'), array('controller' => 'claims', 'action' => 'h7_cw', 1)); ?>		
                                </li>
                                <li>
                                    <?php echo $this->Html->link(__('C/M H+7 Raw Part Claim CW belum dijawab'), array('controller' => 'claims', 'action' => 'h7_cw', 2)); ?>		
                                </li>
                                <li>
                                    <?php echo $this->Html->link(__('C/M H+7 Gravity Claim CW belum dijawab'), array('controller' => 'claims', 'action' => 'h7_cw', 3)); ?>		
                                </li>
                            </ul>
                        </li>

                        </ul>
                </li>
                <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Gear & Axle<b class="caret"></b></a>
                        <ul class="dropdown-menu">
			<li>
			  <?php echo $this->Html->link(__('Regular Claim G&A'), array('controller' => 'claims', 'action' => 'index' , 4)); ?>		
			</li>
			<li>
			  <?php echo $this->Html->link(__('CQR G&A belum dijawab'), array('controller' => 'claims', 'action' => 'cqr', 4)); ?>		
			</li>
			<li class="">
			  <?php echo $this->Html->link(__('C/M H+2 G&A belum dijawab'), array('controller' => 'claims', 'action' => 'h2', 4)); ?>
			</li>
                        <li class="">
			  <?php echo $this->Html->link(__('C/M H+7 G&A belum dijawab'), array('controller' => 'claims', 'action' => 'h7', 4)); ?>
			</li>

                        </ul>
                </li>
                <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Piston<b class="caret"></b></a>
                        <ul class="dropdown-menu">
			<li>
			  <?php echo $this->Html->link(__('Regular Claim Piston'), array('controller' => 'claims', 'action' => 'index' , 5)); ?>		
			</li>
			<li>
			  <?php echo $this->Html->link(__('CQR Piston belum dijawab'), array('controller' => 'claims', 'action' => 'cqr', 5)); ?>		
			</li>
			<li class="">
			  <?php echo $this->Html->link(__('C/M H+2 Piston belum dijawab'), array('controller' => 'claims', 'action' => 'h2', 5)); ?>
			</li>
                        <li class="">
			  <?php echo $this->Html->link(__('C/M H+7 Piston belum dijawab'), array('controller' => 'claims', 'action' => 'h7', 5)); ?>
			</li>

                        </ul>
                </li>

                <li>
			  <?php echo $this->Html->link(__('Return Parts'), array('controller' => 'return_parts', 'action' => 'index')); ?>		
		</li>
          </ul>
            <ul class="nav navbar-nav pull-right ">   
                
                <?php if ($current_user['role'] == 'admin') : ?>
                 <li class=""><?php echo $this->Html->link(__('Sent CQR & C/M'), array('controller' => 'claims', 'action' => 'index_update'), array('escape' => false)); ?> </li>             
                 <li class="btn-danger"><?php echo $this->Html->link(__('Input Data'), array('controller' => 'claims', 'action' => 'add_new'), array('escape' => false)); ?> </li>             
                 
                     <?php endif; ?>
                <?php if ($this->Session->read('Auth.User')): ?>
			<span style="color: white">  
			<?php echo $this->Session->read('Auth.User.username'); ?>.
                        </span>
			<?php echo $this->Html->link('logout', array('controller' => 'users', 'action' => 'logout')); ?>
		<?php else: ?>
			<?php echo $this->Html->link('login', array('controller' => 'users', 'action' => 'login')); ?>
		<?php endif; ?>
                
            </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>