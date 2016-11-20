<div class="dochisExternals view">
<h2><?php echo __('Dochis External'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($dochisExternal['DochisExternal']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Doc External'); ?></dt>
		<dd>
			<?php echo $this->Html->link($dochisExternal['DocExternal']['name'], array('controller' => 'doc_externals', 'action' => 'view', $dochisExternal['DocExternal']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('No'); ?></dt>
		<dd>
			<?php echo h($dochisExternal['DochisExternal']['no']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($dochisExternal['DochisExternal']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Effective Date'); ?></dt>
		<dd>
			<?php echo h($dochisExternal['DochisExternal']['effective_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rev No'); ?></dt>
		<dd>
			<?php echo h($dochisExternal['DochisExternal']['rev_no']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ctg Doc'); ?></dt>
		<dd>
			<?php echo $this->Html->link($dochisExternal['CtgDoc']['name'], array('controller' => 'ctg_docs', 'action' => 'view', $dochisExternal['CtgDoc']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('File'); ?></dt>
		<dd>
			<?php echo h($dochisExternal['DochisExternal']['file']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Dochis External'), array('action' => 'edit', $dochisExternal['DochisExternal']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Dochis External'), array('action' => 'delete', $dochisExternal['DochisExternal']['id']), array(), __('Are you sure you want to delete # %s?', $dochisExternal['DochisExternal']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Dochis Externals'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dochis External'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Doc Externals'), array('controller' => 'doc_externals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Doc External'), array('controller' => 'doc_externals', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ctg Docs'), array('controller' => 'ctg_docs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ctg Doc'), array('controller' => 'ctg_docs', 'action' => 'add')); ?> </li>
	</ul>
</div>
