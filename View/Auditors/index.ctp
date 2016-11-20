<div class="auditors index">
	<h2><?php echo __('Auditors'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($auditors as $auditor): ?>
	<tr>
		<td><?php echo h($auditor['Auditor']['id']); ?>&nbsp;</td>
		<td><?php echo h($auditor['Auditor']['name']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $auditor['Auditor']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $auditor['Auditor']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $auditor['Auditor']['id']), array(), __('Are you sure you want to delete # %s?', $auditor['Auditor']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Back to Home'), array('controller' => 'pages')); ?></li>
		<br/>
		<li><?php echo $this->Html->link(__('New Type Audit'), array('action' => 'add')); ?></li>
	</ul>
</div>
