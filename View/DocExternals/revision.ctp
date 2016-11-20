<body onload="doOnLoad();">
    <script>
	var myCalendar;
	function doOnLoad() {
	    myCalendar = new dhtmlXCalendarObject(["calendar"]);

	}	
	</script>
    
<div class="docExternals form">
<?php echo $this->Form->create('DocExternal', array('url' => array('action' => 'revision'), 'enctype' => 'multipart/form-data')); ?>

	<fieldset>
		<legend><?php echo __('Edit Doc External'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('no');
		echo $this->Form->input('name', array('type' => 'text', 'style' => 'width:600px'));
		echo $this->Form->input('effective_date', array ('type' => 'text', 'id' => 'calendar'));
		echo $this->Form->input('rev_no', array('type' => 'text'));
		echo $this->Form->input('ctg_doc_id');
		echo $this->Form->input('file',array('type'=>'file','label' => false,'div' => false));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Back to List'), array('action' => 'index')); ?></li>
	</ul>
</div>

<div class="related">
<br/>
</div>
</body>