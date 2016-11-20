<select id="options" onchange="optionCheck()">
 <option></option>
 <option value="1">1</option>
 <option value="2">2</option>
 <option value="2">3</option>
 </select>
<div id="hiddenDiv" style="height:100px;width:300px;border:1px;visibility:hidden;">
I am visible now!</div>

<script type="text/javascript">
    function optionCheck(){
        var option = document.getElementById("options").value;    
        var i = option;
        if(option == i){
            window.location = "http://localhost/qasystems/doc/"+i;
        }
    }
</script>





				      <tbody>
					<?php foreach ($dept as $doc): ?>
					<tr>
					<?php if ($doc['Doc']['status_id'] == 2):?>
						<td style="width:20%; color:red;"><?php echo h($doc['Doc']['no']); ?>&nbsp;</td>
						<td style="width:40%; color:red"><?php echo h($doc['Doc']['name']); ?>&nbsp;</td>
						<td style="width:2%; color:red"><?php echo h($doc['Doc']['rev_no']); ?>&nbsp;</td>
						<td style="width:23%; color:red"><?php echo h($doc['Department']['name']); ?>&nbsp;</td>
					<?php else: ?>
						<td style="width:20%"><?php echo $this->Html->link($doc['Doc']['no'], array('action' => 'file', $doc['Doc']['file1']),array('target' => '_blank')); ?>&nbsp;</td>
						<td style="width:40%"><?php echo $this->Html->link($doc['Doc']['name'], array('action' => 'file', $doc['Doc']['file1']),array('target' => '_blank')); ?>&nbsp;</td>
						<td style="width:2%"><?php echo h($doc['Doc']['rev_no']); ?>&nbsp;</td>
						<td style="width:23%"><?php echo h($doc['Department']['name']); ?>&nbsp;</td>
					<?php endif; ?>
					
					 <td style="width:15%">
						
						<a href="#" onclick="doOnLoad('<?php
						echo $this->Html->url(
						array('controller' => 'docs', 'action' => 'file', $doc['Doc']['file1']));
						?>')">View</a>
						!
						<?php echo $this->Html->link(__('Detail'), array('action' => 'view', $doc['Doc']['id'])); ?>
					<?php if ($current_user['group_id'] == '2' and ($current_user['division_id'] == $doc['Department']['division_id']) and ($doc['Doc']['category_id'] == '4' or $doc['Doc']['category_id'] == '5')) : ?>
						<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $doc['Doc']['id'])); ?><br/>
						<?php echo $this->Html->link(__('Revision'), array('action' => 'revision', $doc['Doc']['id'])); ?>
						<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $doc['Doc']['id']), array(), __('Are you sure you want to delete # %s?', $doc['Doc']['id'])); ?>
					<?php elseif ($current_user['group_id'] == '3' and ($doc['Doc']['category_id'] == '1' or $doc['Doc']['category_id'] == '2' or $doc['Doc']['category_id'] == '3' or $doc['Doc']['category_id'] == '4' or $doc['Doc']['category_id'] == '5' or $doc['Doc']['category_id'] == '6')) : ?>
						<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $doc['Doc']['id'])); ?><br/>
						<?php echo $this->Html->link(__('Revision'), array('action' => 'revision', $doc['Doc']['id'])); ?>
						<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $doc['Doc']['id']), array(), __('Are you sure you want to delete # %s?', $doc['Doc']['id'])); ?>
					<?php endif; ?>					
					 </td>
					</tr>
					
					<?php endforeach; ?>					
				      </tbody>

                                      
