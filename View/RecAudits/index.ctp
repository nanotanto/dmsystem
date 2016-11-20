<script>
var dhxWins,
w1;
function doOnLoad(id) {
    dhxWins = new dhtmlXWindows();
    dhxWins.enableAutoViewport(false);
    dhxWins.attachViewportTo("winVP");
    w1 = dhxWins.createWindow("w1", 0, 0, 1000, 620);
    w1.center();
    w1.setText("View");
    w1.button("minmax1").hide();
    w1.attachURL(id);    
}
</script>

 <script type="text/javascript">
    function optionCheck(){
        var option = document.getElementById("options").value;    
        var i = option;
        if(option === i){
            window.location = "http://p0002007/qasystems/rec_audits/dept/"+i;
        }
    }
</script>

<?php echo $this->Element('doc'); ?> 
<br/>

<div class="row">


<div class="col-lg-12">
    <div class="panel panel-default" >
        <div class="panel-heading dark-overlay">
                <strong>LIST OF AUDIT RECORDS</strong>             
            </div>
        <div class="panel-body">
            <div class="canvas-wrapper">
                <div class="row">
                                <?php
				//echo $this->Form->create('RecAudit', array('inputDefaults' => array('label' => false, 'div' => false, 'class'=> 'form-control')));
				//echo $this->Form->input('RecAudit.department_id', array('id'=>'options','onchange'=>'optionCheck()','style' => 'width:400px', 'type' => 'select', 'options' => $dept, 'empty' => array('Select Department')));
				?>
                                <br/>
                    <div class="CSSTableGenerator" >
					
				<table id="example" cellpadding="0" cellspacing="0">
				      <thead>
					<tr>
					<th>No</th>
					<th>Type Audit</th>
					<th>Date</th>
					<th>Department</th>
					<th>Klausul</th>
					<th>Category</th>
					<th>Received</th>
					<th>Status</th>
					<th class="actions"><?php echo __('Actions'); ?></th></tr>
				      </thead>
				      <tbody>
					<?php foreach ($recAudits as $recAudit): ?>
					<tr>
					<td><?php echo h($recAudit['RecAudit']['no']); ?>&nbsp;</td>
					<td><?php echo h($recAudit['Auditor']['name']); ?>&nbsp;</td>					
					<td><?php echo h($recAudit['RecAudit']['date']); ?>&nbsp;</td>
					<td><?php echo h($recAudit['Department']['name']); ?>&nbsp;</td>
					<td><?php echo h($recAudit['Klausul']['name']); ?>&nbsp;</td>
					<td><?php echo h($recAudit['CtgFinding']['name']); ?>&nbsp;</td>
					<td><?php echo h($recAudit['RecAudit']['received']); ?>&nbsp;</td>
					<td><?php echo h($recAudit['Status']['name']); ?>&nbsp;</td>
					<td class="">
						<div class="">						
						<?php echo $this->Html->link(__('View'), array('action' => 'file', $recAudit['RecAudit']['file']), array('target' => '_blank')); ?>
						</div>
					<?php if ($current_user['group_id'] == '3') : ?>
						<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $recAudit['RecAudit']['id'])); ?>
						<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $recAudit['RecAudit']['id']), array(), __('Are you sure you want to delete # %s?', $recAudit['RecAudit']['id'])); ?>
					<?php endif; ?>	
					</td>
					</tr>
					
					<?php endforeach; ?>					
				      </tbody>
				</table>
				</div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<br/><br/><br/>