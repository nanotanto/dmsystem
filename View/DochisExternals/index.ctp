<div class="dochisExternals index">
	<h2><?php echo __('Dochis Externals'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('doc_external_id'); ?></th>
			<th><?php echo $this->Paginator->sort('no'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('effective_date'); ?></th>
			<th><?php echo $this->Paginator->sort('rev_no'); ?></th>
			<th><?php echo $this->Paginator->sort('ctg_doc_id'); ?></th>
			<th><?php echo $this->Paginator->sort('file'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($dochisExternals as $dochisExternal): ?>
	<tr>
		<td><?php echo h($dochisExternal['DochisExternal']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($dochisExternal['DocExternal']['name'], array('controller' => 'doc_externals', 'action' => 'view', $dochisExternal['DocExternal']['id'])); ?>
		</td>
		<td><?php echo h($dochisExternal['DochisExternal']['no']); ?>&nbsp;</td>
		<td><?php echo h($dochisExternal['DochisExternal']['name']); ?>&nbsp;</td>
		<td><?php echo h($dochisExternal['DochisExternal']['effective_date']); ?>&nbsp;</td>
		<td><?php echo h($dochisExternal['DochisExternal']['rev_no']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($dochisExternal['CtgDoc']['name'], array('controller' => 'ctg_docs', 'action' => 'view', $dochisExternal['CtgDoc']['id'])); ?>
		</td>
		<td><?php echo h($dochisExternal['DochisExternal']['file']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'file', $dochisExternal['DochisExternal']['file']), array('target' => '_blank')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $dochisExternal['DochisExternal']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $dochisExternal['DochisExternal']['id']), array(), __('Are you sure you want to delete # %s?', $dochisExternal['DochisExternal']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Dochis External'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Doc Externals'), array('controller' => 'doc_externals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Doc External'), array('controller' => 'doc_externals', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ctg Docs'), array('controller' => 'ctg_docs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ctg Doc'), array('controller' => 'ctg_docs', 'action' => 'add')); ?> </li>
	</ul>
</div>
