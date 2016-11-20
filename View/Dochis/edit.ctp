<div class="dochis form">
<?php echo $this->Form->create('Dochi'); ?>
	<fieldset>
		<legend><?php echo __('Edit Dochi'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('doc_id');
		echo $this->Form->input('department_id');
		echo $this->Form->input('section_id');
		echo $this->Form->input('category_id');
		echo $this->Form->input('no');
		echo $this->Form->input('name');
		echo $this->Form->input('effective_date');
		echo $this->Form->input('rev_no');
		echo $this->Form->input('rev_content');
		echo $this->Form->input('no_reference');
		echo $this->Form->input('remark');
		echo $this->Form->input('file');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Dochi.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Dochi.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Dochis'), array('action' => 'index')); ?></li>
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
