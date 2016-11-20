<div class="drawings form container" style="margin-left: 25px; margin-right: 25px; margin-top: 5px; ">
<button onclick="goBack();" type="button" class="btn btn-warning btn-sm">
  <span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span> Back
</button>

	<h1 style="text-align: center"><?php echo __('Add Drawing'); ?></h1>




	<div class="row">
		<div class="col-md-3">
			<div class="actions">

				</div>			
		</div><!-- end col md 3 -->
		<div class="col-md-9">
			<?php echo $this->Form->create('Drawing', array('role' => 'form')); ?>

				<div class="form-group">
					<?php echo $this->Form->input('receive_date', array('id'=>'calendar_input1','label'=>array('class'=>'col-sm-2 control-label', 'text'=>'Receive Date:'),'style' => 'width:200px','type'=>'text','class' => 'col-sm-2 form-control', 'placeholder' => 'Receive Date'));?>
				           <span> <?php echo $this->Html->image('calendar.png',array('border'=>'0','id'=>'calendar_icon1'));?></span>
                                   </div>
                                <div class="form-group">
					<?php echo $this->Form->input('name', array('label'=>array('class'=>'col-sm-2 control-label', 'text'=>'Drawing No:'),'style' => 'width:400px','class' => 'form-control', 'placeholder' => 'Drawing No'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('part_no', array('label'=>array('class'=>'col-sm-2 control-label', 'text'=>'Part No YPMI:'),'style' => 'width:400px','class' => 'form-control', 'placeholder' => 'Part No YPMI'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('part_name', array('label'=>array('class'=>'col-sm-2 control-label', 'text'=>'Part Name:'),'style' => 'width:400px','class' => 'form-control', 'placeholder' => 'Part Name'));?>
				</div>
				
				<div class="form-group">
					<?php echo $this->Form->input('rev_mark', array('label'=>array('class'=>'col-sm-2 control-label', 'text'=>'Rev. Mark:'),'style' => 'width:400px','class' => 'form-control', 'placeholder' => 'Rev Mark'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('rev_no', array('label'=>array('class'=>'col-sm-2 control-label', 'text'=>'Rev. No:'),'style' => 'width:400px','class' => 'form-control', 'placeholder' => 'Rev No'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('rev_record', array('label'=>array('class'=>'col-sm-2 control-label', 'text'=>'Rev. Record:'),'style' => 'width:400px','type'=>'text','class' => 'form-control', 'placeholder' => 'Rev Record'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('rev_date', array('id'=>'calendar_input2','label'=>array('class'=>'col-sm-2 control-label', 'text'=>'Revision Date:'),'style' => 'width:200px','type'=>'text','class' => 'col-sm-2 form-control', 'placeholder' => 'Rev Date'));?>
				         <?php echo $this->Html->image('calendar.png',array('id'=>'calendar_icon2','border'=>'0'));?>
                               </div>
				<div class="form-group">
					<?php echo $this->Form->input('priority', array('label'=>array('class'=>'col-sm-2 control-label', 'text'=>'Priority:'),'style' => 'width:400px','class' => 'form-control', 'placeholder' => 'Priority'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('status', array('options' => array('Active' => 'Active', 'Discontinue' => 'Discontinue'),'label'=>array('class'=>'col-sm-2 control-label', 'text'=>'Status:'),'style' => 'width:400px','class' => 'form-control', 'placeholder' => 'Status'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('product_id', array('label'=>array('class'=>'col-sm-2 control-label', 'text'=>'Product:'),'style' => 'width:400px','class' => 'form-control', 'placeholder' => 'Product Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('location', array('label'=>array('class'=>'col-sm-2 control-label', 'text'=>'Location:'),'style' => 'width:400px','class' => 'form-control', 'placeholder' => 'Location'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('bambi', array('label'=>array('class'=>'col-sm-2 control-label', 'text'=>'Bambi:'),'style' => 'width:400px','class' => 'form-control', 'placeholder' => 'Bambi'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('page', array('label'=>array('class'=>'col-sm-2 control-label', 'text'=>'Page:'),'style' => 'width:400px','class' => 'form-control', 'placeholder' => 'Page'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-primary','style' => 'margin-left: 250px;')); ?>
				</div>

			<?php echo $this->Form->end() ?>

		</div><!-- end col md 12 -->
	</div><!-- end row -->
</div>
