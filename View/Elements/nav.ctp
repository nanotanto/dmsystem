
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="" href="#">  
                                    <span style='font-family: Book Antiqua; font-size: 30px; font-weight: bold; color: white;'>
                                        QA Systems
                                    </span>
                                </a>
<!--				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> User <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
							<li><a href="#"><span class="glyphicon glyphicon-cog"></span> Settings</a></li>
							<li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
						</ul>
					</li>
				</ul>-->
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>
	
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<form role="search">
		</form>
		<ul class="nav menu">
			<li>
                            <?php echo $this->Html->link(__('<span class="glyphicon glyphicon-menu-right"></span> Internal Document'), array('controller' => 'docs', 'action' => ''), array('escape' => false)); ?>	
                        </li>
                        <li>
                            <?php echo $this->Html->link(__('<span class="glyphicon glyphicon-menu-right"></span> External Document'), array('controller' => 'doc_externals', 'action' => ''), array('escape' => false)); ?>	
                        </li>
			<li>
                            <?php echo $this->Html->link(__('<span class="glyphicon glyphicon-menu-right"></span> Internal Audit Rec.'), array('controller' => 'rec_audits', 'action' => 'index',1), array('escape' => false)); ?>
                        </li>
                        <li>
                                <?php echo $this->Html->link(__('<span class="glyphicon glyphicon-menu-right"></span> External Audit Rec.'), array('controller' => 'rec_audits', 'action' => 'index',2), array('escape' => false)); ?>	
                        </li>
			<li>
                                <?php echo $this->Html->link(__('<span class="glyphicon glyphicon-menu-right"></span> Management Review '), array('controller' => 'rec_mreviews', 'action' => 'index'), array('escape' => false)); ?>	
                        </li>
			<li role="presentation" class="divider"></li>
		</ul>
	</div><!--/.sidebar-->
	
			
