<style>
    a:hover img{      
    border:1px solid #0000ff
    }
/*    a:visited img{
        border:1px solid #0000ff
    }*/

</style>
			
<div class="panel panel-blue">
    <div class="panel-heading dark-overlay">External Document</div>
    <div class="panel-body">
        <ul class="nav nav-list ">
            <li style="font-weight: bold; text-align: center;" class="btn-default">
		<?php echo $this->Html->link(__('ISO'), array('controller' => 'doc_externals', 'action' => 'index', 1),
		array('target' => '_self', 'escape' => false)); ?>
            </li><P></P>
            <li style="font-weight: bold; text-align: center;" class="btn-default">
		<?php echo $this->Html->link(__('SNI'), array('controller' => 'doc_externals', 'action' => 'index', 2),
		array('target' => '_self', 'escape' => false)); ?>
            </li><P></P>
            <li style="font-weight: bold; text-align: center;" class="btn-default">
		<?php echo $this->Html->link(__('QA Manual Customer'), array('controller' => 'doc_externals', 'action' => 'index', 3),
		array('target' => '_self', 'escape' => false)); ?>
            </li><P></P>
            <?php //endif; ?>
	</ul>
    </div>
</div>
			
