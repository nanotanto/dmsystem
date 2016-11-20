
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				
			</div>
	<div id="navbar" class="navbar-collapse collapse">
                                <a class="pull-left" href="#">  
                                    <span style='font-family: Book Antiqua; font-size: 30px; font-weight: bold; color: white;'>
                                        Document Management System &nbsp;&nbsp
                                    </span>
                                </a>
            
        
            
                                 <ul class="user-menu ">
                                            <?php if ($this->Session->read('Auth.User')): ?>  
                                        <li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> 
                                                    <?php echo $this->Session->read('Auth.User.name'); ?> 
                                                    <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <?php echo $this->Html->link('<span class="glyphicon glyphicon-log-out"></span> Logout', array('controller' => 'users', 'action' => 'logout'), array('escape' => false)); ?>
                                                    </li> 
						</ul>
                                            </li>
											
                                            <?php if ($current_user['group_id'] == '3' or $current_user['group_id'] == '2') : ?>
                                            <li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-pencil"></span> 
                                                    <span class="caret"></span></a>&nbsp;&nbsp;&nbsp;
						<ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <?php echo $this->Html->link('<span class="glyphicon glyphicon-plus-sign"></span> Internal Document', array('controller' => 'docs', 'action' => 'add'), array('escape' => false)); ?>
                                                    </li> 
                                                    <?php if ($current_user['group_id'] == '3') : ?>
                                                    <li>
                                                        <?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus-sign"></span> External Document'), array('controller' => 'doc_externals', 'action' => 'add'), array('escape' => false)); ?>	
                                                    </li>
                                                    <?php endif; ?>
                                                    <li>
                                                        <?php echo $this->Html->link('<span class="glyphicon glyphicon-plus-sign"></span> Internal/External Audit', array('controller' => 'rec_audits', 'action' => 'add'), array('escape' => false)); ?>
                                                    </li>
                                                    <li>
                                                        <?php echo $this->Html->link('<span class="glyphicon glyphicon-plus-sign"></span> Management Review', array('controller' => 'rec_mreviews', 'action' => 'add'), array('escape' => false)); ?>
                                                    </li>
						</ul>
                                            </li> 
                                            <?php endif; ?>
                                            <?php else: ?>
                                            <li>
                                                        <?php echo $this->Html->link('<span class="glyphicon glyphicon-log-in"></span> Login', array('controller' => 'users', 'action' => 'login'), array('escape' => false)); ?>	
                                            </li>
                                            <?php endif; ?>
                                
				</ul>
        </div><!--/.nav-collapse -->			
		</div><!-- /.container-fluid -->
	</nav>
<!--   		<div class="row">
			<ol class="breadcrumb">
				<li>
                                        <?php echo $this->Html->link(__('<span class="glyphicon glyphicon-book"></span>'), array('controller' => 'docs', 'action' => ''), array('escape' => false)); ?>	
                                </li>
				<li class="active">Document Control</li>
			</ol>
		</div>/.row-->
