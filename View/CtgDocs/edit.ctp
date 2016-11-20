<div class="ctgDocs form">
<?php echo $this->Form->create('CtgDoc'); ?>
	<fieldset>
		<legend><?php echo __('Edit Ctg Doc'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('deskripsi');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Category External'), array('action' => 'index')); ?></li>
	</ul>
</div>
