<div class="klausuls view">
<h2><?php echo __('Klausul'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($klausul['Klausul']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($klausul['Klausul']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($klausul['Klausul']['description']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('List Klausuls'), array('action' => 'index')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Rec Audits'); ?></h3>
	<?php if (!empty($klausul['RecAudit'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Auditor Id'); ?></th>
		<th><?php echo __('No'); ?></th>
		<th><?php echo __('Date'); ?></th>
		<th><?php echo __('Department Id'); ?></th>
		<th><?php echo __('Requirement Id'); ?></th>
		<th><?php echo __('Klausul Id'); ?></th>
		<th><?php echo __('Ctg Finding Id'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Received'); ?></th>
		<th><?php echo __('Status Id'); ?></th>
		<th><?php echo __('File'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($klausul['RecAudit'] as $recAudit): ?>
		<tr>
			<td><?php echo $recAudit['id']; ?></td>
			<td><?php echo $recAudit['auditor_id']; ?></td>
			<td><?php echo $recAudit['no']; ?></td>
			<td><?php echo $recAudit['date']; ?></td>
			<td><?php echo $recAudit['department_id']; ?></td>
			<td><?php echo $recAudit['requirement_id']; ?></td>
			<td><?php echo $recAudit['klausul_id']; ?></td>
			<td><?php echo $recAudit['ctg_finding_id']; ?></td>
			<td><?php echo $recAudit['description']; ?></td>
			<td><?php echo $recAudit['received']; ?></td>
			<td><?php echo $recAudit['status_id']; ?></td>
			<td><?php echo $recAudit['file']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'rec_audits', 'action' => 'view', $recAudit['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'rec_audits', 'action' => 'edit', $recAudit['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'rec_audits', 'action' => 'delete', $recAudit['id']), array(), __('Are you sure you want to delete # %s?', $recAudit['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Rec Audit'), array('controller' => 'rec_audits', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
