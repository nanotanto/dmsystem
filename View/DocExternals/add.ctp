<body onload="doOnLoad();">
    <script>
	var myCalendar;
	function doOnLoad() {
	    myCalendar = new dhtmlXCalendarObject(["calendar1"]);

	}	
	</script>
        
        <?php echo $this->Element('doc'); ?> 
        <br/>
        <div class='row'>
            <div class="col-lg-4">
            <?php echo $this->Element('ext'); ?> 
           
            </div>
            <div class="col-lg-8">
                <div class="panel panel-default">
                    <div class="panel-heading">Add External Document</div>
                    <div class="panel-body">
                        <div class="col-md-6">
 <div class="docExternals form">
<?php echo $this->Form->create('DocExternal', array('url' => array('action' => 'add'), 'enctype' => 'multipart/form-data')); ?>
        <div class="form-group">
             <?php echo $this->Form->input('no', array('label'=>array('class'=>'control-label', 'text'=>'Doc. No'),'style' => 'width:400px','class' => 'form-control', 'placeholder' => 'Doc. No'));?>
        </div>
     <div class="form-group">
             <?php echo $this->Form->input('name', array('type' => 'text','label'=>array('class'=>'control-label', 'text'=>'Name'),'style' => 'width:400px','class' => 'form-control', 'placeholder' => 'Name'));?>
	</div>
     <div class="form-group">
             <?php echo $this->Form->input('effective_date', array('id' => 'calendar1','type' => 'text','label'=>array('class'=>'control-label', 'text'=>'Effective Date'),'style' => 'width:400px','class' => 'form-control', 'placeholder' => 'Effective Date'));?>
	</div>
     <div class="form-group">
             <?php echo $this->Form->input('rev_no', array('type' => 'text','label'=>array('class'=>'control-label', 'text'=>'Rev. No'),'style' => 'width:400px','class' => 'form-control', 'placeholder' => 'Rev. No'));?>
	</div>
     <div class="form-group">
             <?php echo $this->Form->input('ctg_doc_id', array('label'=>array('class'=>'control-label', 'text'=>'Category'),'style' => 'width:400px','class' => 'form-control', 'placeholder' => 'Category'));?>
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
        </div>

</body>
<br/>