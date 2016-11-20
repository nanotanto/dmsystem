<style>
    a:hover img{      
    border:1px solid #0000ff
    }
/*    a:visited img{
        border:1px solid #0000ff
    }*/

</style>
			
<div class="panel panel-blue">
    <div class="panel-heading dark-overlay">Internal Document</div>
    <div class="panel-body">
        <ul class="nav nav-list ">
            <li style="font-weight: bold; text-align: center;" class="btn-default">
		<?php echo $this->Html->link(__('Quality Manual'), array('controller' => 'docs', 'action' => 'index', 1),
		array('target' => '_self', 'escape' => false)); ?>
            </li><P></P>
            <li style="font-weight: bold; text-align: center;" class="btn-default">
		<?php echo $this->Html->link(__('Procedure'), array('controller' => 'docs', 'action' => 'index', 2),
		array('target' => '_self', 'escape' => false)); ?>
            </li><P></P>
            <li style="font-weight: bold; text-align: center;" class="btn-default">
		<?php echo $this->Html->link(__('Work Instruction'), array('controller' => 'docs', 'action' => 'index', 3),
		array('target' => '_self', 'escape' => false)); ?>
            </li><P></P>
            <li style="font-weight: bold; text-align: center;" class="btn-default">
		<?php echo $this->Html->link(__('Form'), array('controller' => 'docs', 'action' => 'index', 4),
		array('target' => '_self', 'escape' => false)); ?>
            </li><P></P>
	</ul>
    </div>
</div>
			
