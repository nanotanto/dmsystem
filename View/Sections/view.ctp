<div class="sections view">
<h2><?php echo __('Section'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($section['Section']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Department'); ?></dt>
		<dd>
			<?php echo $this->Html->link($section['Department']['name'], array('controller' => 'departments', 'action' => 'view', $section['Department']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($section['Section']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('List Sections'), array('action' => 'index')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Doc Forms'); ?></h3>
	<?php if (!empty($section['DocForm'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Department Id'); ?></th>
		<th><?php echo __('Section Id'); ?></th>
		<th><?php echo __('Doc Qarule Id'); ?></th>
		<th><?php echo __('Doc Sop Id'); ?></th>
		<th><?php echo __('Doc Qcpc Id'); ?></th>
		<th><?php echo __('Doc Ik Id'); ?></th>
		<th><?php echo __('No'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Effective Date'); ?></th>
		<th><?php echo __('Rev No'); ?></th>
		<th><?php echo __('Rev Content'); ?></th>
		<th><?php echo __('Remark'); ?></th>
		<th><?php echo __('File'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($section['DocForm'] as $docForm): ?>
		<tr>
			<td><?php echo $docForm['id']; ?></td>
			<td><?php echo $docForm['department_id']; ?></td>
			<td><?php echo $docForm['section_id']; ?></td>
			<td><?php echo $docForm['doc_qarule_id']; ?></td>
			<td><?php echo $docForm['doc_sop_id']; ?></td>
			<td><?php echo $docForm['doc_qcpc_id']; ?></td>
			<td><?php echo $docForm['doc_ik_id']; ?></td>
			<td><?php echo $docForm['no']; ?></td>
			<td><?php echo $docForm['name']; ?></td>
			<td><?php echo $docForm['effective_date']; ?></td>
			<td><?php echo $docForm['rev_no']; ?></td>
			<td><?php echo $docForm['rev_content']; ?></td>
			<td><?php echo $docForm['remark']; ?></td>
			<td><?php echo $docForm['file']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'doc_forms', 'action' => 'view', $docForm['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'doc_forms', 'action' => 'edit', $docForm['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'doc_forms', 'action' => 'delete', $docForm['id']), array(), __('Are you sure you want to delete # %s?', $docForm['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Doc Form'), array('controller' => 'doc_forms', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Doc Iks'); ?></h3>
	<?php if (!empty($section['DocIk'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Department Id'); ?></th>
		<th><?php echo __('Section Id'); ?></th>
		<th><?php echo __('Doc Qarule Id'); ?></th>
		<th><?php echo __('Doc Sop Id'); ?></th>
		<th><?php echo __('Doc Qcpc Id'); ?></th>
		<th><?php echo __('No'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Effective Date'); ?></th>
		<th><?php echo __('Rev No'); ?></th>
		<th><?php echo __('Rev Content'); ?></th>
		<th><?php echo __('Remark'); ?></th>
		<th><?php echo __('File'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($section['DocIk'] as $docIk): ?>
		<tr>
			<td><?php echo $docIk['id']; ?></td>
			<td><?php echo $docIk['department_id']; ?></td>
			<td><?php echo $docIk['section_id']; ?></td>
			<td><?php echo $docIk['doc_qarule_id']; ?></td>
			<td><?php echo $docIk['doc_sop_id']; ?></td>
			<td><?php echo $docIk['doc_qcpc_id']; ?></td>
			<td><?php echo $docIk['no']; ?></td>
			<td><?php echo $docIk['name']; ?></td>
			<td><?php echo $docIk['effective_date']; ?></td>
			<td><?php echo $docIk['rev_no']; ?></td>
			<td><?php echo $docIk['rev_content']; ?></td>
			<td><?php echo $docIk['remark']; ?></td>
			<td><?php echo $docIk['file']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'doc_iks', 'action' => 'view', $docIk['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'doc_iks', 'action' => 'edit', $docIk['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'doc_iks', 'action' => 'delete', $docIk['id']), array(), __('Are you sure you want to delete # %s?', $docIk['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Doc Ik'), array('controller' => 'doc_iks', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Dochis'); ?></h3>
	<?php if (!empty($section['Dochi'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Doc Id'); ?></th>
		<th><?php echo __('Department Id'); ?></th>
		<th><?php echo __('Section Id'); ?></th>
		<th><?php echo __('Category Id'); ?></th>
		<th><?php echo __('No'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Effective Date'); ?></th>
		<th><?php echo __('Rev No'); ?></th>
		<th><?php echo __('Rev Content'); ?></th>
		<th><?php echo __('No Reference'); ?></th>
		<th><?php echo __('Remark'); ?></th>
		<th><?php echo __('File'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($section['Dochi'] as $dochi): ?>
		<tr>
			<td><?php echo $dochi['id']; ?></td>
			<td><?php echo $dochi['doc_id']; ?></td>
			<td><?php echo $dochi['department_id']; ?></td>
			<td><?php echo $dochi['section_id']; ?></td>
			<td><?php echo $dochi['category_id']; ?></td>
			<td><?php echo $dochi['no']; ?></td>
			<td><?php echo $dochi['name']; ?></td>
			<td><?php echo $dochi['effective_date']; ?></td>
			<td><?php echo $dochi['rev_no']; ?></td>
			<td><?php echo $dochi['rev_content']; ?></td>
			<td><?php echo $dochi['no_reference']; ?></td>
			<td><?php echo $dochi['remark']; ?></td>
			<td><?php echo $dochi['file']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'dochis', 'action' => 'view', $dochi['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'dochis', 'action' => 'edit', $dochi['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'dochis', 'action' => 'delete', $dochi['id']), array(), __('Are you sure you want to delete # %s?', $dochi['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Dochi'), array('controller' => 'dochis', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Dochis Forms'); ?></h3>
	<?php if (!empty($section['DochisForm'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Doc Form Id'); ?></th>
		<th><?php echo __('Section Id'); ?></th>
		<th><?php echo __('No'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Effective Date'); ?></th>
		<th><?php echo __('Rev No'); ?></th>
		<th><?php echo __('Rev Content'); ?></th>
		<th><?php echo __('Remark'); ?></th>
		<th><?php echo __('File'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($section['DochisForm'] as $dochisForm): ?>
		<tr>
			<td><?php echo $dochisForm['id']; ?></td>
			<td><?php echo $dochisForm['doc_form_id']; ?></td>
			<td><?php echo $dochisForm['section_id']; ?></td>
			<td><?php echo $dochisForm['no']; ?></td>
			<td><?php echo $dochisForm['name']; ?></td>
			<td><?php echo $dochisForm['effective_date']; ?></td>
			<td><?php echo $dochisForm['rev_no']; ?></td>
			<td><?php echo $dochisForm['rev_content']; ?></td>
			<td><?php echo $dochisForm['remark']; ?></td>
			<td><?php echo $dochisForm['file']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'dochis_forms', 'action' => 'view', $dochisForm['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'dochis_forms', 'action' => 'edit', $dochisForm['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'dochis_forms', 'action' => 'delete', $dochisForm['id']), array(), __('Are you sure you want to delete # %s?', $dochisForm['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Dochis Form'), array('controller' => 'dochis_forms', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Dochis Iks'); ?></h3>
	<?php if (!empty($section['DochisIk'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Doc Ik Id'); ?></th>
		<th><?php echo __('Section Id'); ?></th>
		<th><?php echo __('No'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Effective Date'); ?></th>
		<th><?php echo __('Rev No'); ?></th>
		<th><?php echo __('Rev Content'); ?></th>
		<th><?php echo __('Remark'); ?></th>
		<th><?php echo __('File'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($section['DochisIk'] as $dochisIk): ?>
		<tr>
			<td><?php echo $dochisIk['id']; ?></td>
			<td><?php echo $dochisIk['doc_ik_id']; ?></td>
			<td><?php echo $dochisIk['section_id']; ?></td>
			<td><?php echo $dochisIk['no']; ?></td>
			<td><?php echo $dochisIk['name']; ?></td>
			<td><?php echo $dochisIk['effective_date']; ?></td>
			<td><?php echo $dochisIk['rev_no']; ?></td>
			<td><?php echo $dochisIk['rev_content']; ?></td>
			<td><?php echo $dochisIk['remark']; ?></td>
			<td><?php echo $dochisIk['file']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'dochis_iks', 'action' => 'view', $dochisIk['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'dochis_iks', 'action' => 'edit', $dochisIk['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'dochis_iks', 'action' => 'delete', $dochisIk['id']), array(), __('Are you sure you want to delete # %s?', $dochisIk['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Dochis Ik'), array('controller' => 'dochis_iks', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Docs'); ?></h3>
	<?php if (!empty($section['Doc'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Department Id'); ?></th>
		<th><?php echo __('Section Id'); ?></th>
		<th><?php echo __('Category Id'); ?></th>
		<th><?php echo __('No'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Effective Date'); ?></th>
		<th><?php echo __('Rev No'); ?></th>
		<th><?php echo __('Rev Content'); ?></th>
		<th><?php echo __('No Reference'); ?></th>
		<th><?php echo __('Remark'); ?></th>
		<th><?php echo __('File'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($section['Doc'] as $doc): ?>
		<tr>
			<td><?php echo $doc['id']; ?></td>
			<td><?php echo $doc['department_id']; ?></td>
			<td><?php echo $doc['section_id']; ?></td>
			<td><?php echo $doc['category_id']; ?></td>
			<td><?php echo $doc['no']; ?></td>
			<td><?php echo $doc['name']; ?></td>
			<td><?php echo $doc['effective_date']; ?></td>
			<td><?php echo $doc['rev_no']; ?></td>
			<td><?php echo $doc['rev_content']; ?></td>
			<td><?php echo $doc['no_reference']; ?></td>
			<td><?php echo $doc['remark']; ?></td>
			<td><?php echo $doc['file']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'docs', 'action' => 'view', $doc['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'docs', 'action' => 'edit', $doc['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'docs', 'action' => 'delete', $doc['id']), array(), __('Are you sure you want to delete # %s?', $doc['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Doc'), array('controller' => 'docs', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
