<div class="recAudits view">
<h2><?php echo __('Rec Audit'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($recAudit['RecAudit']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Auditor'); ?></dt>
		<dd>
			<?php echo $this->Html->link($recAudit['Auditor']['name'], array('controller' => 'auditors', 'action' => 'view', $recAudit['Auditor']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('No'); ?></dt>
		<dd>
			<?php echo h($recAudit['RecAudit']['no']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date'); ?></dt>
		<dd>
			<?php echo h($recAudit['RecAudit']['date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Department'); ?></dt>
		<dd>
			<?php echo $this->Html->link($recAudit['Department']['name'], array('controller' => 'departments', 'action' => 'view', $recAudit['Department']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Requirement'); ?></dt>
		<dd>
			<?php echo $this->Html->link($recAudit['Requirement']['name'], array('controller' => 'requirements', 'action' => 'view', $recAudit['Requirement']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Klausul'); ?></dt>
		<dd>
			<?php echo $this->Html->link($recAudit['Klausul']['name'], array('controller' => 'klausuls', 'action' => 'view', $recAudit['Klausul']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ctg Finding'); ?></dt>
		<dd>
			<?php echo $this->Html->link($recAudit['CtgFinding']['name'], array('controller' => 'ctg_findings', 'action' => 'view', $recAudit['CtgFinding']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($recAudit['RecAudit']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Received'); ?></dt>
		<dd>
			<?php echo h($recAudit['RecAudit']['received']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo $this->Html->link($recAudit['Status']['name'], array('controller' => 'statuses', 'action' => 'view', $recAudit['Status']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('File'); ?></dt>
		<dd>
			<?php echo h($recAudit['RecAudit']['file']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Rec Audit'), array('action' => 'edit', $recAudit['RecAudit']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Rec Audit'), array('action' => 'delete', $recAudit['RecAudit']['id']), array(), __('Are you sure you want to delete # %s?', $recAudit['RecAudit']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Rec Audits'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rec Audit'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Auditors'), array('controller' => 'auditors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Auditor'), array('controller' => 'auditors', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Departments'), array('controller' => 'departments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Department'), array('controller' => 'departments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Requirements'), array('controller' => 'requirements', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Requirement'), array('controller' => 'requirements', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Klausuls'), array('controller' => 'klausuls', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Klausul'), array('controller' => 'klausuls', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ctg Findings'), array('controller' => 'ctg_findings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ctg Finding'), array('controller' => 'ctg_findings', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Statuses'), array('controller' => 'statuses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Status'), array('controller' => 'statuses', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
<br/>
</div>