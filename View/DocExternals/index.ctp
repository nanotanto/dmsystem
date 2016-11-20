<script>
var dhxWins,
w1;
function doOnLoad(id) {
    dhxWins = new dhtmlXWindows();
    dhxWins.enableAutoViewport(false);
    dhxWins.attachViewportTo("winVP");
    dhxWins.setImagePath("../../codebase/imgs/");
    w1 = dhxWins.createWindow("w1", 0, 0, 1000, 620);
    w1.center();
    w1.setText("View");
    w1.button("minmax1").hide();
    w1.attachURL(id);    
}
</script>

<?php echo $this->Element('doc'); ?> 
<br/>

<div class="row">
    <div class="col-md-4">
        <?php echo $this->Element('ext'); ?>
    </div>
    
    <div class="col-lg-8">
        <div class="panel panel-default" >
            <div class="panel-heading dark-overlay"  >
                <strong>LIST OF EXTERNAL DOCUMENT</strong>             
             </div>   
            <div class="panel-body">
                <div class="canvas-wrapper">
                    <div class="row">
                        <div class="CSSTableGenerator" >
				
				<table id="example" cellpadding="0" cellspacing="0">
				      <thead>
					<tr>
					  <th style="width:20">Doc. No</th>
					  <th style="width:40%">Document Name</th>
					  <th style="width:10%">Rev.</th>
					  <th style="width:15%">Category</th>
					 <?php if ($current_user['group_id'] == '2') : ?> 
					  <th style="width:15%" class="actions"><?php echo __('Actions'); ?></th>
					 <?php endif; ?>	
					</tr>
				      </thead>
				      <tbody>
					<?php foreach ($docExternals as $docExternal): ?>
					<tr>						
                                        <?php if ($docExternal['DocExternal']['ctg_doc_id']==4 or $docExternal['DocExternal']['ctg_doc_id']==5) :?> 
                                            <td style="width:20%">
                                               <?php echo $this->Html->link($docExternal['DocExternal']['no'], array('action' => 'filex', $docExternal['DocExternal']['file']), array('target' => '_blank')); ?>
                                                &nbsp;</td>
                                                <td style="width:40%">
                                               <?php echo $this->Html->link($docExternal['DocExternal']['name'], array('action' => 'filex', $docExternal['DocExternal']['file']), array('target' => '_blank')); ?>
                                                &nbsp;</td>
                                                <td style="width:10%"><?php echo h($docExternal['DocExternal']['rev_no']); ?>&nbsp;</td>
                                                <td style="width:15%"><?php echo h($docExternal['CtgDoc']['name']); ?>&nbsp;</td>
                                        <?php else : ?>	
                                            <td style="width:20%">
                                               <?php echo $this->Html->link($docExternal['DocExternal']['no'], array('action' => 'file', $docExternal['DocExternal']['file']), array('target' => '_blank')); ?>
                                                &nbsp;</td>
                                                <td style="width:40%">
                                               <?php echo $this->Html->link($docExternal['DocExternal']['name'], array('action' => 'file', $docExternal['DocExternal']['file']), array('target' => '_blank')); ?>
                                                &nbsp;</td>
                                                <td style="width:10%"><?php echo h($docExternal['DocExternal']['rev_no']); ?>&nbsp;</td>
                                                <td style="width:15%"><?php echo h($docExternal['CtgDoc']['name']); ?>&nbsp;</td> 
                                        <?php endif; ?>  				
					
					<?php if ($current_user['group_id'] == '3') : ?>
					 <td style="width:15%">					
						<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $docExternal['DocExternal']['id'])); ?>
						<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $docExternal['DocExternal']['id']), array(), __('Are you sure you want to delete # %s?', $docExternal['DocExternal']['id'])); ?>
					<?php endif; ?>	
					 </td>
					</tr>					
					<?php endforeach; ?>					
				      </tbody>
				</table>
				</div>                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br/><br/><br/>




