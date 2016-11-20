<style>
    a:hover img{      
    border:1px solid #0000ff
    }
    a:visited img{
        border:1px solid #0000ff
    }
</style>
<script>
var dhxWins,
w1;
function doOnLoad(id) {
    dhxWins = new dhtmlXWindows();
    dhxWins.enableAutoViewport(false);
    dhxWins.attachViewportTo("winVP");
    dhxWins.setImagePath("../../codebase/imgs/");
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
        if(option == i){
            window.location = "/qasystems/docs/dept/"+i;
        }
    }
</script>

<?php echo $this->Element('doc'); ?> 

<br/>
<div class="row">
		<div class="col-md-4">
			
				<div class="panel panel-blue">
					<div class="panel-heading dark-overlay">Hierarchy Document</div>
					<div class="panel-body" style="text-align: center;">
                                            
                                            <div class="panel panel-default">
                                               
                                                <br/>
						<?php echo $this->Html->link($this->Html->image('lev0.png'),
						array('controller' => 'docs', 'action' => 'index'),
						array('target' => '_self', 'escape' => false)
						);
						?>
						<?php echo $this->Html->link($this->Html->image('lev1.png'),
						array('controller' => 'docs', 'action' => 'index', 1),
						array('target' => '_self', 'escape' => false)
						);
						?>
						<?php echo $this->Html->link($this->Html->image('lev2.png'),
						array('controller' => 'docs', 'action' => 'index', 2),
						array('target' => '_self', 'escape' => false)
						);
						?>
						<?php echo $this->Html->link($this->Html->image('lev3.png'),
						array('controller' => 'docs', 'action' => 'index', 3),
						array('target' => '_self', 'escape' => false)
						);
						?>
						<?php echo $this->Html->link($this->Html->image('lev4.png'),
						array('controller' => 'docs', 'action' => 'index', 4),
						array('target' => '_self', 'escape' => false)
						);
						?>
						<?php echo $this->Html->link($this->Html->image('lev5.png'),
						array('controller' => 'docs', 'action' => 'index', 5),
						array('target' => '_self', 'escape' => false)
						);
						?>
                                                <br/><br/>
						  </div>
                                                <ul class="nav nav-list">
                                                    <li style="font-weight: bold;" class="nav-header">Supporting Document</li><p></p>					      
						  <li style="font-weight: bold;" class="btn-default">
						   <?php echo $this->Html->link(__('QC Process Chart'), array('controller' => 'docs', 'action' => 'index', 6),
						array('target' => '_self', 'escape' => false)); ?>
						  </li>
						</ul>

                                              
					</div>
				</div>
                </div>
                                
<div class="col-lg-8">
				<div class="panel panel-default" >
                                    <div class="panel-heading dark-overlay"  >
                                        <strong>
                                            LIST OF INTERNAL DOCUMENT                                        
                                        </strong>
                                    </div>
                                    
					<div class="panel-body">
                                            <div class="canvas-wrapper">
                                                <div class="row">
                                                    
                                                  
				<?php
				echo $this->Form->create('Doc', array('inputDefaults' => array('label' => false, 'div' => false, 'class'=> 'form-control')));
				echo $this->Form->input('Doc.department_id', array('id'=>'options','onchange'=>'optionCheck()','style' => 'width:400px', 'type' => 'select', 'options' => $doc, 'empty' => array('Select Department')));
				?>
				<br/>
                                <div style="font-weight: bold; text-align: center;">
				<?php foreach ($docs as $dept): ?>
                                 <?php $dep = $dept['Department']['name']; ?>
                                <?php endforeach; ?>	
                                <?php echo $dep ?>
                                </div>
				<div  class="CSSTableGenerator">
				                                    
				<table id="example" cellpadding="0" cellspacing="0"  class="">
				      <thead>
					<tr>
					  <th style="width:20%;">Doc. No</th>
					  <th style="width:40%;">Document Name</th>
					  <th style="width:2%;">Rev.</th>
					  <th style="width:23%;">Department</th>
					  <th style="width:15%;" class="actions"><?php echo __('Actions'); ?></th>
					</tr>
				      </thead>
				      <tbody id="">
					<?php foreach ($docs as $doc): ?>
					<tr>
					<?php if ($doc['Doc']['status_id'] == 2):?>
						<td style="width:20%; color:red;"><?php echo h($doc['Doc']['no']); ?>&nbsp;</td>
						<td style="width:40%; color:red"><?php echo h($doc['Doc']['name']); ?>&nbsp;</td>
						<td style="width:2%; color:red"><?php echo h($doc['Doc']['rev_no']); ?>&nbsp;</td>
						<td style="width:23%; color:red"><?php echo h($doc['Department']['name']); ?>&nbsp;</td>
					<?php else: ?>
						<td style="width:20%"><?php echo $this->Html->link($doc['Doc']['no'], array('action' => 'file', $doc['Doc']['file1']),array('target' => '_blank')); ?>&nbsp;</td>
						<td style="width:40%"><?php echo $this->Html->link($doc['Doc']['name'], array('action' => 'file', $doc['Doc']['file1']),array('target' => '_blank')); ?>&nbsp;</td>
						<td style="width:2%"><?php echo h($doc['Doc']['rev_no']); ?>&nbsp;</td>
						<td style="width:23%"><?php echo h($doc['Department']['name']); ?>&nbsp;</td>
					<?php endif; ?>
					
					 <td style="width:15%">
						<?php echo $this->Html->link(__('Detail'), array('action' => 'view', $doc['Doc']['id'])); ?>
					<?php if ($current_user['group_id'] == '2' and ($current_user['division_id'] == $doc['Department']['division_id']) and ($doc['Doc']['category_id'] == '4' or $doc['Doc']['category_id'] == '5')) : ?>
						<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $doc['Doc']['id'])); ?><br/>
						<?php echo $this->Html->link(__('Revision'), array('action' => 'revision', $doc['Doc']['id'])); ?>
						<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $doc['Doc']['id']), array(), __('Are you sure you want to delete # %s?', $doc['Doc']['id'])); ?>
					<?php elseif ($current_user['group_id'] == '3' and ($doc['Doc']['category_id'] == '1' or $doc['Doc']['category_id'] == '2' or $doc['Doc']['category_id'] == '3' or $doc['Doc']['category_id'] == '4' or $doc['Doc']['category_id'] == '5' or $doc['Doc']['category_id'] == '6')) : ?>
						<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $doc['Doc']['id'])); ?><br/>
						<?php echo $this->Html->link(__('Revision'), array('action' => 'revision', $doc['Doc']['id'])); ?>
						<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $doc['Doc']['id']), array(), __('Are you sure you want to delete # %s?', $doc['Doc']['id'])); ?>
					<?php endif; ?>					
					 </td>
					</tr>
					
					<?php endforeach; ?>					
				      </tbody>
				</table>
				<br/>
				<span style="color:red"> Ket : Untuk font warna merah berarti status dokumen obsolete (tidak di gunakan)</span>
				
				</div>
				
				
                                                </div>
                                            </div>
                                        </div>
                                </div>
</div>
                                            
</div><!--/.row-->
   


<?php
$this->Js->get('#department_id')->event('change', 
$this->Js->request(array(
'controller'=>'docs',
'action'=>'getByDept'
), array(
'update'=>'#getByDept',
'async' => true,
'method' => 'post',
'dataExpression'=>true,
'data'=> $this->Js->serializeForm(array(
'isForm' => true,
'inline' => true
))
))
);