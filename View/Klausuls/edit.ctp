<div class="klausuls form">
<?php echo $this->Form->create('Klausul'); ?>
	<fieldset>
		<legend><?php echo __('Edit Klausul'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('requirement_id');
		echo $this->Form->input('name');
		echo $this->Form->input('description');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Klausuls'), array('action' => 'index')); ?></li>
	</ul>
</div>
