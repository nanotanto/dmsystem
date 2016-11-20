<div class="dochis view">
<h2><?php echo __('Dochi'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($dochi['Dochi']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Doc'); ?></dt>
		<dd>
			<?php echo $this->Html->link($dochi['Doc']['name'], array('controller' => 'docs', 'action' => 'view', $dochi['Doc']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Department'); ?></dt>
		<dd>
			<?php echo $this->Html->link($dochi['Department']['name'], array('controller' => 'departments', 'action' => 'view', $dochi['Department']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Section'); ?></dt>
		<dd>
			<?php echo $this->Html->link($dochi['Section']['name'], array('controller' => 'sections', 'action' => 'view', $dochi['Section']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Category'); ?></dt>
		<dd>
			<?php echo $this->Html->link($dochi['Category']['name'], array('controller' => 'categories', 'action' => 'view', $dochi['Category']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('No'); ?></dt>
		<dd>
			<?php echo h($dochi['Dochi']['no']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($dochi['Dochi']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Effective Date'); ?></dt>
		<dd>
			<?php echo h($dochi['Dochi']['effective_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rev No'); ?></dt>
		<dd>
			<?php echo h($dochi['Dochi']['rev_no']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rev Content'); ?></dt>
		<dd>
			<?php echo h($dochi['Dochi']['rev_content']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('No Reference'); ?></dt>
		<dd>
			<?php echo h($dochi['Dochi']['no_reference']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Remark'); ?></dt>
		<dd>
			<?php echo h($dochi['Dochi']['remark']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('File'); ?></dt>
		<dd>
			<?php echo h($dochi['Dochi']['file']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Dochi'), array('action' => 'edit', $dochi['Dochi']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Dochi'), array('action' => 'delete', $dochi['Dochi']['id']), array(), __('Are you sure you want to delete # %s?', $dochi['Dochi']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Dochis'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dochi'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Docs'), array('controller' => 'docs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Doc'), array('controller' => 'docs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Departments'), array('controller' => 'departments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Department'), array('controller' => 'departments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sections'), array('controller' => 'sections', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Section'), array('controller' => 'sections', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
	</ul>
</div>
