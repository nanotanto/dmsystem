<?php echo $this->Element('doc'); ?> 
<br/>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default" >
            <div class="panel-heading dark-overlay">
                <strong>LIST OF DIVISIONS</strong>           
            </div>
            <div class="panel-body">
                <div class="canvas-wrapper">
                    <div class="row">
                            <?php echo $this->Html->link('<span class="glyphicon glyphicon-plus-sign"></span> New Division', array('action' => 'add'), array('escape' => false)); ?>
                        <div class="CSSTableGenerator" >
                            <table id="example" cellpadding="0" cellspacing="0">
                                <thead>
                                <tr>
                                                <th>Id</th>
                                                <th>Division Name</th>
                                                <th class="actions"><?php echo __('Actions'); ?></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($divisions as $division): ?>
                                <tr>
                                        <td><?php echo h($division['Division']['id']); ?>&nbsp;</td>
                                        <td><?php echo h($division['Division']['name']); ?>&nbsp;</td>
                                        <td class="actions">
                                                <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $division['Division']['id'])); ?>
                                                <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $division['Division']['id']), array(), __('Are you sure you want to delete # %s?', $division['Division']['id'])); ?>
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
                        
