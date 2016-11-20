<script>
var dhxWins,
w1;
function doOnLoad(id) {
    dhxWins = new dhtmlXWindows();
    dhxWins.enableAutoViewport(false);
    dhxWins.attachViewportTo("winVP");
    dhxWins.setImagePath("../../codebase/imgs/");
    w1 = dhxWins.createWindow("w1", 0, 0, 800, 500);
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
	<?php echo $this->Element('piramid'); ?> 
    </div>
    
    <div class="col-lg-8">
        <div class="panel panel-default" >
            <div class="panel-heading dark-overlay"  >
                <strong>DETAIL DOCUMENT</strong> 
            </div>
            
            <div class="panel-body">
                <div class="canvas-wrapper">
                    <div class="">
            <table class="table">
		<tr>
		</tr>
		<tr>
		<td style="width:30%"><?php echo __('Category'); ?></td>
		<td style="width:70%">
			<?php echo h($doc['Category']['name']); ?>
			&nbsp;
		</td>
		</tr>
		<tr>
		<td style="width:30%"><?php echo __('No'); ?></td>
		<td style="width:70%">
			<?php echo h($doc['Doc']['no']); ?>
			&nbsp;
		</td>
		</tr>
		<tr>
		<td style="width:30%"><?php echo __('Name'); ?></td>
		<td style="width:70%">
			<?php echo h($doc['Doc']['name']); ?>
			&nbsp;
		</td>
		</tr>
		<tr>
		<td style="width:30%"><?php echo __('Effective Date'); ?></td>
		<td style="width:70%">
			<?php echo h($doc['Doc']['effective_date']); ?>
			&nbsp;
		</td>
		</tr>
		<tr>
		<td style="width:30%"><?php echo __('Rev.'); ?></td>
		<td style="width:70%">
			<?php echo h($doc['Doc']['rev_no']); ?>
			&nbsp;
		</td>
		</tr>
		<tr>
		<td style="width:30%"><?php echo __('Rev Content'); ?></td>
		<td style="width:70%">
			<?php echo h($doc['Doc']['rev_content']); ?>
			&nbsp;
		</td>
		</tr>
		<tr>
		<td style="width:30%"><?php echo __('No Reference'); ?></td>
		<td style="width:70%">
			<?php //echo h($doc['Doc']['no_reference']); ?>
			<?php if ($doc['Doc']['no_reference'] == '') : ?>
			-
			<?php else : ?>
			<?php echo h($data['Doc']['no']); ?>
			&nbsp;			
			<?php endif; ?>
		</td>
		</tr>
		<tr>
		<td style="width:30%"><?php echo __('Remark'); ?></td>
		<td style="width:70%">
			<?php echo h($doc['Doc']['remark']); ?>
			&nbsp;
		</td>
		</tr>
		<tr>
		<td style="width:30%"><?php echo __('Department'); ?></td>
		<td style="width:70%">
			<?php echo h($doc['Department']['name']); ?>
			&nbsp;
		</td>
		</tr>
		<tr>
		<td style="width:30%"><?php echo __('Section'); ?></td>
		<td style="width:70%">
			<?php echo h($doc['Section']['name']); ?>
			&nbsp;
		</td>
		</tr>
		<tr>
		<td style="width:30%"><?php echo __('File'); ?></td>
                <td style="width:20%"><?php echo $this->Html->link(__('View Document'), array('action' => 'file', $doc['Doc']['file1']),array('target' => '_blank')); ?>&nbsp;</td>
		
		</tr>
		<tr>
		<td style="width:30%"><?php echo __('Source File'); ?></td>
		<td style="width:70%">
			<?php if ($doc['Doc']['file2'] == '') : ?>
			No Source File
			<?php else : ?>
			<?php echo $this->Html->link(__('Download'), array('action' => 'file', $doc['Doc']['file2'])); ?>
			&nbsp;			
			<?php endif; ?>
					
			
		</td>
		</tr>
	</table>

<div class="related">
	<h3><?php echo __('History Document'); ?></h3>
	<?php if (!empty($doc['Dochi'])): ?>
	<div class="CSSTableGenerator" >
	<table cellpadding = "0" cellspacing = "0">
	<thead>
	<tr>
		<th><?php echo __('No'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Effective Date'); ?></th>
		<th><?php echo __('Rev.'); ?></th>
		<th><?php echo __('Rev Content'); ?></th>
		<th><?php echo __('No Reference'); ?></th>
		<th><?php echo __('Remark'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($doc['Dochi'] as $dochi): ?>
		<tr>
			<td><?php echo $dochi['no']; ?></td>
			<td><?php echo $dochi['name']; ?></td>
			<td><?php echo $dochi['effective_date']; ?></td>
			<td><?php echo $dochi['rev_no']; ?></td>
			<td><?php echo $dochi['rev_content']; ?></td>
			<td><?php echo $dochi['no_reference']; ?></td>
			<td><?php echo $dochi['remark']; ?></td>
			<td class="">
				<a href="#" onclick="doOnLoad('<?php
						echo $this->Html->url(
						array('controller' => 'dochis', 'action' => 'file', $dochi['file']));
						?>')">View</a>
				<?php if ($current_user['group_id'] == '2' and ($current_user['division_id'] == $doc['Department']['division_id']) and ($doc['Doc']['category_id'] == '4' or $doc['Doc']['category_id'] == '5')) : ?>
						<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $dochi['id'])); ?>
						<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'dochis', 'action' => 'delete', $dochi['id']), array(), __('Are you sure you want to delete # %s?', $dochi['id'])); ?>
					<?php elseif ($current_user['group_id'] == '3' and ($doc['Doc']['category_id'] == '1' or $doc['Doc']['category_id'] == '2' or $doc['Doc']['category_id'] == '3' or $doc['Doc']['category_id'] == '4' or $doc['Doc']['category_id'] == '5' or $doc['Doc']['category_id'] == '6')) : ?>
						<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $dochi['id'])); ?>
						<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'dochis', 'action' => 'delete', $dochi['id']), array(), __('Are you sure you want to delete # %s?', $dochi['id'])); ?>
					<?php endif; ?>	
						
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
	</div>
<?php endif; ?>

</div>
                        
                    </div>
                </div>
            </div>
                                            
                                                
        </div>
    </div>
      
</div>
<div class="hidden-phone hidden-tablet" id="winVP" ></div>
<p>
<br/><h3></h3>
</p>