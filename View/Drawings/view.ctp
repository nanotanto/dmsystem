<div style="margin-top: 5px"  class="drawings view container">
    
<button onclick="goBack();" type="button" class="btn btn-warning btn-sm">
  <span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span> Back
</button>
<h3>DRAWING</h3>

	<div class="row">

		<div class="col-md-9">
			<div class="CSSTableGenerator" style="overflow:scroll">
			<table cellpadding="0" cellspacing="0" class="table table-striped">
				<tbody>

<tr>
		<th><?php echo __('Drawing No'); ?></th>
		<td>
			<?php echo h($drawing['Drawing']['name']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Part No YPMI'); ?></th>
		<td>
			<?php echo h($drawing['Drawing']['part_no']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Part Name'); ?></th>
		<td>
			<?php echo h($drawing['Drawing']['part_name']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Receive Date'); ?></th>
		<td>
			<?php echo h($drawing['Drawing']['receive_date']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Rev Mark'); ?></th>
		<td>
			<?php echo h($drawing['Drawing']['rev_mark']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Rev No'); ?></th>
		<td>
			<?php echo h($drawing['Drawing']['rev_no']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Rev Record'); ?></th>
		<td>
			<?php echo h($drawing['Drawing']['rev_record']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Rev Date'); ?></th>
		<td>
			<?php echo h($drawing['Drawing']['rev_date']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Priority'); ?></th>
		<td>
			<?php echo h($drawing['Drawing']['priority']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Status'); ?></th>
		<td>
			<?php echo h($drawing['Drawing']['status']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Product'); ?></th>
		<td>
                    <?php echo h($drawing['Product']['name']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Location'); ?></th>
		<td>
			<?php echo h($drawing['Drawing']['location']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Bambi'); ?></th>
		<td>
			<?php echo h($drawing['Drawing']['bambi']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Page'); ?></th>
		<td>
			<?php echo h($drawing['Drawing']['page']); ?>
			&nbsp;
		</td>
</tr>

				</tbody>
			</table>
			</div>

		</div><!-- end col md 9 -->

	</div>

<div class="related row">
	<div class="">
	<h3><?php echo __('History Drawing'); ?></h3>
	<?php if (!empty($drawing['Drawinghi'])): ?>
	<div class="CSSTableGenerator" style="overflow:scroll">
	<table cellpadding = "0" cellspacing = "0" class="table table-striped">
	<thead>
	<tr>
                <th>Drawing No</th>
		<th>Part No YPMI</th>
		<th>Part Name</th>
		<th>Receive Date</th>
		<th>Rev. Mark</th>
		<th>Rev. No</th>
		<th>Rev. Record</th>
		<th>Rev. Date</th>
		<th>Priority</th>
		<th>Status</th>
		<th>Location</th>
		<th>Bambi</th>
		<th>Page</th>

	</tr>
	</thead>
	<tbody>
	<?php foreach ($drawing['Drawinghi'] as $drawinghi): ?>
		<tr>
			<td><?php echo h($drawinghi['name']); ?></td>
			<td><?php echo h($drawinghi['part_no']); ?></td>
			<td><?php echo h($drawinghi['part_name']); ?></td>
			<td><?php echo h($drawinghi['receive_date']); ?></td>
			<td><?php echo h($drawinghi['rev_mark']); ?></td>
			<td><?php echo h($drawinghi['rev_no']); ?></td>
			<td><?php echo h($drawinghi['rev_record']); ?></td>
			<td><?php echo h($drawinghi['rev_date']); ?></td>
			<td><?php echo h($drawinghi['priority']); ?></td>
			<td><?php echo h($drawinghi['status']); ?></td>
			<td><?php echo h($drawinghi['location']); ?></td>
			<td><?php echo h($drawinghi['bambi']); ?></td>
			<td><?php echo h($drawinghi['page']); ?></td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	<tr>
		<td></td>
	</tr>
	</table>
	</div>
<?php endif; ?>

<!--	<div class="actions">
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Part'), array('controller' => 'parts', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?> 
	</div>
	</div> end col md 12 -->
</div>
    </div>
<br/>
<div class="related row">
	<div class="">
	<h3><?php echo __('Related Parts'); ?></h3>
	<?php if (!empty($drawing['Part'])): ?>
	<div class="CSSTableGenerator" style="overflow:scroll">
	<table cellpadding = "0" cellspacing = "0" class="table table-striped">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Product Id'); ?></th>
		<th><?php echo __('Mdl Id'); ?></th>
		<th><?php echo __('Project Id'); ?></th>
		<th><?php echo __('Drawing Id'); ?></th>
		<th><?php echo __('Part Name'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Similar Part Id'); ?></th>
		<th><?php echo __('Type Part Id'); ?></th>
		<th><?php echo __('Qty'); ?></th>
		<th><?php echo __('Vendor Id'); ?></th>
		<th><?php echo __('Remark'); ?></th>
		<th class="actions"></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($drawing['Part'] as $part): ?>
		<tr>
			<td><?php echo $part['id']; ?></td>
			<td><?php echo $part['product_id']; ?></td>
			<td><?php echo $part['mdl_id']; ?></td>
			<td><?php echo $part['project_id']; ?></td>
			<td><?php echo $part['drawing_id']; ?></td>
			<td><?php echo $part['part_name']; ?></td>
			<td><?php echo $part['name']; ?></td>
			<td><?php echo $part['similar_part_id']; ?></td>
			<td><?php echo $part['type_part_id']; ?></td>
			<td><?php echo $part['qty']; ?></td>
			<td><?php echo $part['vendor_id']; ?></td>
			<td><?php echo $part['remark']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>'), array('controller' => 'parts', 'action' => 'view', $part['id']), array('escape' => false)); ?>
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>'), array('controller' => 'parts', 'action' => 'edit', $part['id']), array('escape' => false)); ?>
				<?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>'), array('controller' => 'parts', 'action' => 'delete', $part['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $part['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	<tr>
		<td></td>
	</tr>
	</table>
	</div>
<?php endif; ?>

<!--	<div class="actions">
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Part'), array('controller' => 'parts', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?> 
	</div>
	</div> end col md 12 -->
</div>
    </div>
<br/>