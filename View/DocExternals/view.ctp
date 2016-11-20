<div class="docExternals view">
<h2><?php echo __('Doc External'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($docExternal['DocExternal']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('No'); ?></dt>
		<dd>
			<?php echo h($docExternal['DocExternal']['no']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($docExternal['DocExternal']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Effective Date'); ?></dt>
		<dd>
			<?php echo h($docExternal['DocExternal']['effective_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rev No'); ?></dt>
		<dd>
			<?php echo h($docExternal['DocExternal']['rev_no']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ctg Doc'); ?></dt>
		<dd>
			<?php echo $this->Html->link($docExternal['CtgDoc']['name'], array('controller' => 'ctg_docs', 'action' => 'view', $docExternal['CtgDoc']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('File'); ?></dt>
		<dd>
			<?php echo h($docExternal['DocExternal']['file']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Doc External'), array('action' => 'edit', $docExternal['DocExternal']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Doc External'), array('action' => 'delete', $docExternal['DocExternal']['id']), array(), __('Are you sure you want to delete # %s?', $docExternal['DocExternal']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Doc Externals'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Doc External'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ctg Docs'), array('controller' => 'ctg_docs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ctg Doc'), array('controller' => 'ctg_docs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Dochis Externals'), array('controller' => 'dochis_externals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dochis External'), array('controller' => 'dochis_externals', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Dochis Externals'); ?></h3>
	<?php if (!empty($docExternal['DochisExternal'])): ?>
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
	<?php foreach ($docExternal['DochisExternal'] as $dochisExternal): ?>
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

<div class="related">
<br/>
</div>