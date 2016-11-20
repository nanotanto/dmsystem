<div class="recMreviews view">
<h2><?php echo __('Rec Mreview'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($recMreview['RecMreview']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('No'); ?></dt>
		<dd>
			<?php echo h($recMreview['RecMreview']['no']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($recMreview['RecMreview']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rev'); ?></dt>
		<dd>
			<?php echo h($recMreview['RecMreview']['rev']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Issued'); ?></dt>
		<dd>
			<?php echo h($recMreview['RecMreview']['issued']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('File'); ?></dt>
		<dd>
			<?php echo h($recMreview['RecMreview']['file']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Rec Mreview'), array('action' => 'edit', $recMreview['RecMreview']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Rec Mreview'), array('action' => 'delete', $recMreview['RecMreview']['id']), array(), __('Are you sure you want to delete # %s?', $recMreview['RecMreview']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Rec Mreviews'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rec Mreview'), array('action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
<br/>
</div>