<script>
var dhxWins,
w1;
function doOnLoad(id) {
    dhxWins = new dhtmlXWindows();
    dhxWins.enableAutoViewport(false);
    dhxWins.attachViewportTo("winVP");
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
    <div class="col-lg-12">
        <div class="panel panel-default" >
            <div class="panel-heading dark-overlay">
                <strong>LIST OF MANAGEMENT REVIEW RECORDS</strong>           
            </div>
            <div class="panel-body">
                <div class="canvas-wrapper">
                    <div class="row">
                        <div class="CSSTableGenerator" >
                            <table id="example" cellpadding="0" cellspacing="0">
				      <thead>
					<tr>
				
					<th>No</th>
					<th>Name</th>
					<th>Rev.</th>
					<th>Issued Date</th>
					
					<th class="actions"><?php echo __('Actions'); ?></th>
				      </thead>
				      <tbody>
					<?php foreach ($recMreviews as $recMreview): ?>
					<tr>
						
						<td><?php echo h($recMreview['RecMreview']['no']); ?>&nbsp;</td>
						<td><?php echo h($recMreview['RecMreview']['name']); ?>&nbsp;</td>
						<td><?php echo h($recMreview['RecMreview']['rev']); ?>&nbsp;</td>
						<td><?php echo h($recMreview['RecMreview']['issued']); ?>&nbsp;</td>
						
						<td class="">
						
						<div class="hidden-desktop">						
							<?php echo $this->Html->link(__('File 1'), array('action' => 'file', $recMreview['RecMreview']['file1']), array('target' => '_blank')); ?>
                                                        <?php echo $this->Html->link(__('File 2'), array('action' => 'file', $recMreview['RecMreview']['file2']), array('target' => '_blank')); ?>
						
						</div>
						<?php if ($current_user['group_id'] == '2') : ?>	
							<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $recMreview['RecMreview']['id'])); ?>
							<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $recMreview['RecMreview']['id']), array(), __('Are you sure you want to delete # %s?', $recMreview['RecMreview']['id'])); ?>
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
<br/><rb/><br/>

