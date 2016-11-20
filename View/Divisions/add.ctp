<?php echo $this->Element('doc'); ?> 
<br/>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">Add Division</div>
            <div class='panel-body'>
                <?php echo $this->Form->create('Division'); ?>
                        <fieldset>
                        <?php
                                echo $this->Form->input('name');
                        ?>
                        </fieldset>
                <?php echo $this->Form->end(__('Submit')); ?>
             
        </div>
    </div>    
</div>
</div><br/><br/><br/>
