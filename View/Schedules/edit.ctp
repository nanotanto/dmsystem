<body onload="doOnLoad();">
    <script>
	var myCalendar;
	function doOnLoad() {
	    myCalendar = new dhtmlXCalendarObject(["calendar1"]);

	}	
	</script>
        
<?php echo $this->Element('doc'); ?> 
<br/>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">Edit Schedule</div>
            <div class='panel-body'>
             <div class="recMreviews form">
                 <?php echo $this->Form->create('Schedule', array('url' => array('action' => 'edit'), 'enctype' => 'multipart/form-data')); ?>
                 <?php echo $this->Form->input('id');?>
                 <div class="form-group">
                    <?php echo $this->Form->input('no', array('label'=>array('class'=>'control-label', 'text'=>'No'),'style' => 'width:400px','class' => 'form-control', 'placeholder' => 'No'));?>
                 </div>
                 <div class="form-group">
                    <?php echo $this->Form->input('name', array('type' => 'text','label'=>array('class'=>'control-label', 'text'=>'Name'),'style' => 'width:400px','class' => 'form-control', 'placeholder' => 'Name'));?>
                 </div>
                 <div class="form-group">
                    <?php echo $this->Form->input('issued', array('id' => 'calendar1','type' => 'text','label'=>array('class'=>'control-label', 'text'=>'Issued Date'),'style' => 'width:400px','class' => 'form-control', 'placeholder' => 'Issued Date'));?>
                </div>
                 <div class="form-group">
                    <?php echo $this->Form->input('rev', array('type' => 'text','label'=>array('class'=>'control-label', 'text'=>'Rev. No'),'style' => 'width:400px','class' => 'form-control', 'placeholder' => 'Rev. No'));?>
               </div>
                 <?php		
                    for($i=1; $i<3; $i++)
                    {
                    ?>
                     <div  id="attachment<?php echo $i;?>" <?php if($i !=1) echo "style='display:none;'";?> >
                            <div class="form-group">
                              <?php echo $this->Form->input('file'.$i,array('type'=>'file','label' => 'File '.$i,'div' => false));?>
                        </div>
                        <div class="form-group"  id="attachmentlink<?php echo $i;?>"  <?php if($i==2) echo "style='display:none;'";?>><a href="javascript:void(0);" onclick="show('attachment<?php echo $i+1;?>'); hide('attachmentlink<?php echo $i;?>');">Add Another Attachment</a></div>
                        </div>
                        <?php } ?>

                    <div class="form-group">
                        <?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-primary')); ?>
                    </div>
            </div>
        </div>
    </div>    
</div>
</div>

<script>
function show(target){
	document.getElementById(target).style.display = 'block';
}
function hide(target){
	document.getElementById(target).style.display = 'none';
}
</script>
<br/><br/><br/>