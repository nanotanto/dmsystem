<style>
    a:hover img{      
    border:1px solid #0000ff
    }
/*    a:visited img{
        border:1px solid #0000ff
    }*/

</style>
			
<div class="panel panel-blue">
            <div class="panel-heading dark-overlay">Audit Records</div>
            <div class="panel-body">
                <ul class="nav nav-list ">
                    <li style="font-weight: bold;" class="btn-default">
                     	<?php echo $this->Html->link(__('Internal Audit'), array('controller' => 'rec_audits', 'action' => 'internal')); ?>
			</li><P></P>
                    <li style="font-weight: bold;" class="btn-default">
                        <?php echo $this->Html->link(__('External Audit'), array('controller' => 'rec_audits', 'action' => 'external')); ?>
                    </li><P></P>
                    <li style="font-weight: bold;" class="btn-default">
                    	<?php echo $this->Html->link(__('Management Review'), array('controller' => 'rec_mreviews', 'action' => 'index')); ?>
                    </li><P></P>
                   

                </ul>
            </div>
        </div>
			
