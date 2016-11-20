<div class="ctgDocs view">
<h2><?php echo __('Ctg Doc'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($ctgDoc['CtgDoc']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($ctgDoc['CtgDoc']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Deskripsi'); ?></dt>
		<dd>
			<?php echo h($ctgDoc['CtgDoc']['deskripsi']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('List Category External'), array('action' => 'index')); ?></li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Doc Externals'); ?></h3>
	<?php if (!empty($ctgDoc['DocExternal'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('No'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Effective Date'); ?></th>
		<th><?php echo __('Rev No'); ?></th>
		<th><?php echo __('Ctg Doc Id'); ?></th>
		<th><?php echo __('File'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($ctgDoc['DocExternal'] as $docExternal): ?>
		<tr>
			<td><?php echo $docExternal['id']; ?></td>
			<td><?php echo $docExternal['no']; ?></td>
			<td><?php echo $docExternal['name']; ?></td>
			<td><?php echo $docExternal['effective_date']; ?></td>
			<td><?php echo $docExternal['rev_no']; ?></td>
			<td><?php echo $docExternal['ctg_doc_id']; ?></td>
			<td><?php echo $docExternal['file']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'doc_externals', 'action' => 'view', $docExternal['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'doc_externals', 'action' => 'edit', $docExternal['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'doc_externals', 'action' => 'delete', $docExternal['id']), array(), __('Are you sure you want to delete # %s?', $docExternal['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Doc External'), array('controller' => 'doc_externals', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Dochis Externals'); ?></h3>
	<?php if (!empty($ctgDoc['DochisExternal'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Doc External Id'); ?></th>
		<th><?php echo __('No'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Effective Date'); ?></th>
		<th><?php echo __('Rev No'); ?></th>
		<th><?php echo __('Ctg Doc Id'); ?></th>
		<th><?php echo __('File'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($ctgDoc['DochisExternal'] as $dochisExternal): ?>
		<tr>
			<td><?php echo $dochisExternal['id']; ?></td>
			<td><?php echo $dochisExternal['doc_external_id']; ?></td>
			<td><?php echo $dochisExternal['no']; ?></td>
			<td><?php echo $dochisExternal['name']; ?></td>
			<td><?php echo $dochisExternal['effective_date']; ?></td>
			<td><?php echo $dochisExternal['rev_no']; ?></td>
			<td><?php echo $dochisExternal['ctg_doc_id']; ?></td>
			<td><?php echo $dochisExternal['file']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'dochis_externals', 'action' => 'view', $dochisExternal['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'dochis_externals', 'action' => 'edit', $dochisExternal['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'dochis_externals', 'action' => 'delete', $dochisExternal['id']), array(), __('Are you sure you want to delete # %s?', $dochisExternal['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Dochis External'), array('controller' => 'dochis_externals', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
