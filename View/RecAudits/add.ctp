<body onload="doOnLoad();">
    <script>
	var myCalendar;
	function doOnLoad() {
	    myCalendar = new dhtmlXCalendarObject(["calendar1", "calendar2"]);

	}	
	</script>
<?php echo $this->Element('doc'); ?> 
<br/>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">Add Internal/External Audit Records</div>
            <div class='panel-body'>
<div class="recAudits form">
<?php echo $this->Form->create('RecAudit', array('url' => array('action' => 'add'), 'enctype' => 'multipart/form-data')); ?>
      
    <div class="form-group">
             <?php echo $this->Form->input('auditor_id', array('label'=>array('class'=>'control-label', 'text'=>'Type Audit'),'style' => 'width:400px','class' => 'form-control', 'placeholder' => 'Type Audit'));?>
	</div>
        <div class="form-group">
        <?php echo $this->Form->input('no', array('label'=>array('class'=>'control-label', 'text'=>'No'),'style' => 'width:400px','class' => 'form-control', 'placeholder' => 'No'));?>
        </div>
        <div class="form-group">
             <?php echo $this->Form->input('date', array('id' => 'calendar1','type' => 'text','label'=>array('class'=>'control-label', 'text'=>'Date'),'style' => 'width:400px','class' => 'form-control', 'placeholder' => 'Date'));?>
        </div>
        <div class="form-group">
             <?php echo $this->Form->input('department_id', array('label'=>array('class'=>'control-label', 'text'=>'Department'),'style' => 'width:400px','class' => 'form-control', 'placeholder' => 'Department'));?>
	</div>
        <div class="form-group">
             <?php echo $this->Form->input('requirement_id', array('label'=>array('class'=>'control-label', 'text'=>'Requirement'),'style' => 'width:400px','class' => 'form-control', 'placeholder' => 'Requirement'));?>
	</div>
        <div class="form-group">
             <?php echo $this->Form->input('klausul_id', array('label'=>array('class'=>'control-label', 'text'=>'Requirement'),'style' => 'width:400px','class' => 'form-control', 'placeholder' => 'Klausul'));?>
	</div>
        <div class="form-group">
             <?php echo $this->Form->input('ctg_finding_id', array('label'=>array('class'=>'control-label', 'text'=>'Category'),'style' => 'width:400px','class' => 'form-control', 'placeholder' => 'Category'));?>
	</div>
        <div class="form-group">
        <?php echo $this->Form->input('description', array('label'=>array('class'=>'control-label', 'text'=>'Description'),'style' => 'width:400px','class' => 'form-control', 'placeholder' => 'Description'));?>
        </div>
        <div class="form-group">
             <?php echo $this->Form->input('received', array('id' => 'calendar2','type' => 'text','label'=>array('class'=>'control-label', 'text'=>'Received Date'),'style' => 'width:400px','class' => 'form-control', 'placeholder' => 'Received Date'));?>
        </div>
        <div class="form-group">
             <?php echo $this->Form->input('status_id', array('label'=>array('class'=>'control-label', 'text'=>'Status'),'style' => 'width:400px','class' => 'form-control', 'placeholder' => 'Status'));?>
	</div>
        <div class="form-group">
                  <?php echo $this->Form->input('file',array('type'=>'file','label' => 'File ','div' => false));?>
            </div>
        <div class="form-group">
            <?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-primary')); ?>
	</div>
        

</div>
            </div>
        </div>
    </div>    
</div>

  <br/>   <br/>  <br/> 