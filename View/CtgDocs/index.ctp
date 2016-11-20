<div class="ctgDocs index">
	<h2><?php echo __('Ctg Docs'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('deskripsi'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($ctgDocs as $ctgDoc): ?>
	<tr>
		<td><?php echo h($ctgDoc['CtgDoc']['id']); ?>&nbsp;</td>
		<td><?php echo h($ctgDoc['CtgDoc']['name']); ?>&nbsp;</td>
		<td><?php echo h($ctgDoc['CtgDoc']['deskripsi']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $ctgDoc['CtgDoc']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $ctgDoc['CtgDoc']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $ctgDoc['CtgDoc']['id']), array(), __('Are you sure you want to delete # %s?', $ctgDoc['CtgDoc']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Category External'), array('action' => 'add')); ?></li>
	</ul>
</div>
