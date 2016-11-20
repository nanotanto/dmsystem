<div class="dochisExternals form">

<?php echo $this->Form->create('DochisExternal', array('url' => array('action' => 'add'), 'enctype' => 'multipart/form-data')); ?>

	<fieldset>
		<legend><?php echo __('Add Dochis External'); ?></legend>
	<?php
		echo $this->Form->input('doc_external_id');
		echo $this->Form->input('no');
		echo $this->Form->input('name');
		echo $this->Form->input('effective_date');
		echo $this->Form->input('rev_no');
		echo $this->Form->input('ctg_doc_id');
		echo $this->Form->input('file',array('type'=>'file','label' => false,'div' => false));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Dochis Externals'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Doc Externals'), array('controller' => 'doc_externals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Doc External'), array('controller' => 'doc_externals', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ctg Docs'), array('controller' => 'ctg_docs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ctg Doc'), array('controller' => 'ctg_docs', 'action' => 'add')); ?> </li>
	</ul>
</div>
