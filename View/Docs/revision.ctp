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
            <?php echo $this->Element('piramid'); ?> 
           
            </div>
			<div class="col-lg-8">
				<div class="panel panel-default">
					<div class="panel-heading">Revision Internal Document</div>
					<div class="panel-body">
						<div class="col-md-6">
                                                    
<div class="docs form">
<?php echo $this->Form->create('Doc', array('url' => array('action' => 'revision'), 'enctype' => 'multipart/form-data')); ?>
	<?php echo $this->Form->input('id');?>
        <div class="form-group">
             <?php echo $this->Form->input('department_id', array('id' =>'department_id','label'=>array('class'=>'control-label', 'text'=>'Department'),'style' => 'width:400px','class' => 'form-control', 'placeholder' => 'Department'));?>
	</div>
        <div class="form-group">
             <?php echo $this->Form->input('section_id', array('id'=>'section_id','label'=>array('class'=>'control-label', 'text'=>'Section'),'style' => 'width:400px','class' => 'form-control', 'placeholder' => 'Section'));?>
	</div>
        <div class="form-group">
             <?php echo $this->Form->input('category_id', array('label'=>array('class'=>'control-label', 'text'=>'Category'),'style' => 'width:400px','class' => 'form-control', 'placeholder' => 'Category'));?>
	</div>
        <div class="form-group">
             <?php echo $this->Form->input('no', array('id'=>'no','label'=>array('class'=>'control-label', 'text'=>'Doc. No'),'style' => 'width:400px','class' => 'form-control', 'placeholder' => 'Doc. No'));
            echo "<div id='cek_no' class='form-group' style='color: red'> </div>";?>
        </div>
        <div class="form-group">
             <?php echo $this->Form->input('name', array('type' => 'text','label'=>array('class'=>'control-label', 'text'=>'Name'),'style' => 'width:400px','class' => 'form-control', 'placeholder' => 'Name'));?>
	</div>
        <div class="form-group">
             <?php echo $this->Form->input('effective_date', array('id' => 'calendar1','type' => 'text','value'=>'','label'=>array('class'=>'control-label', 'text'=>'Effective Date'),'style' => 'width:400px','class' => 'form-control', 'placeholder' => 'Effective Date'));?>
	</div>
        <div class="form-group">
             <?php echo $this->Form->input('rev_no', array('type' => 'text','label'=>array('class'=>'control-label', 'text'=>'Rev. No'),'style' => 'width:400px','class' => 'form-control', 'placeholder' => 'Rev. No'));?>
	</div>
        <div class="form-group">
             <?php echo $this->Form->input('rev_content', array('type' => 'text','label'=>array('class'=>'control-label', 'text'=>'Rev. Content'),'style' => 'width:400px','class' => 'form-control', 'placeholder' => 'Rev. Conten'));?>
	</div>
        <div class="form-group">
             <?php echo $this->Form->input('no_reference', array('type' => 'select', 'options' => $doc, 'empty' => '-- Select --','label'=>array('class'=>'control-label', 'text'=>'No Reference'),'style' => 'width:400px','class' => 'form-control', 'placeholder' => 'No Reference'));?>
	</div>
        <div class="form-group">
             <?php echo $this->Form->input('remark', array('type' => 'text','label'=>array('class'=>'control-label', 'text'=>'Remark'),'style' => 'width:400px','class' => 'form-control', 'placeholder' => 'Remark'));?>
	</div>
        <div class="form-group">
             <?php echo $this->Form->input('status_id', array('type' => 'select','label'=>array('class'=>'control-label', 'text'=>'Status'),'style' => 'width:400px','class' => 'form-control', 'placeholder' => 'Status'));?>
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
			</div><!-- /.col-->
		</div><!-- /.row -->
        <br/><br/>
<script>
function show(target){
	document.getElementById(target).style.display = 'block';
}
function hide(target){
	document.getElementById(target).style.display = 'none';
}
</script>
</body>

<?php
$this->Js->get('#department_id')->event('change', 
$this->Js->request(array(
'controller'=>'sections',
'action'=>'getByDept'
), array(
'update'=>'#section_id',
'async' => true,
'method' => 'post',
'dataExpression'=>true,
'data'=> $this->Js->serializeForm(array(
'isForm' => true,
'inline' => true
))
))
);

$this->Js->get('#no')->event('change', 
$this->Js->request(array(
'controller'=>'docs',
'action'=>'getByNo'
), array(
'update'=>'#cek_no',
'async' => true,
'method' => 'post',
'dataExpression'=>true,
'data'=> $this->Js->serializeForm(array(
'isForm' => true,
'inline' => true
))
))
);
?>