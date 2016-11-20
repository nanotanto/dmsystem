<style>
    a:hover img{      
    border:1px solid #0000ff
    }
/*    a:visited img{
        border:1px solid #0000ff
    }*/

</style>
<div class="panel panel-blue">
					<div class="panel-heading dark-overlay">Hierarchy Internal Document</div>
					<div class="panel-body" style="text-align: center;">
                                            
                                            <div class="panel panel-default">
                                               
                                                <br/>
						<?php echo $this->Html->link($this->Html->image('lev0.png'),
						array('controller' => 'docs', 'action' => 'index'),
						array('target' => '_self', 'escape' => false)
						);
						?>
						<?php echo $this->Html->link($this->Html->image('lev1.png'),
						array('controller' => 'docs', 'action' => 'index', 1),
						array('target' => '_self', 'escape' => false)
						);
						?>
						<?php echo $this->Html->link($this->Html->image('lev2.png'),
						array('controller' => 'docs', 'action' => 'index', 2),
						array('target' => '_self', 'escape' => false)
						);
						?>
						<?php echo $this->Html->link($this->Html->image('lev3.png'),
						array('controller' => 'docs', 'action' => 'index', 3),
						array('target' => '_self', 'escape' => false)
						);
						?>
						<?php echo $this->Html->link($this->Html->image('lev4.png'),
						array('controller' => 'docs', 'action' => 'index', 4),
						array('target' => '_self', 'escape' => false)
						);
						?>
						<?php echo $this->Html->link($this->Html->image('lev5.png'),
						array('controller' => 'docs', 'action' => 'index', 5),
						array('target' => '_self', 'escape' => false)
						);
						?>
                                                <br/><br/>
						  </div>
                                                <ul class="nav nav-list">
                                                    <li style="font-weight: bold;" class="nav-header">Supporting Document</li><p></p>					      
						  <li style="font-weight: bold;" class="btn-default">
						   <?php echo $this->Html->link(__('QC Process Chart'), array('controller' => 'docs', 'action' => 'index', 6),
						array('target' => '_self', 'escape' => false)); ?>
						  </li>
						</ul>

                                              
					</div>
				</div>