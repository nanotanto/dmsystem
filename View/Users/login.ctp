<!DOCTYPE html>
<html lang="en">
  <head>

    <style type="text/css">
      body {
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
      }

      .form-signin {
        max-width: 300px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
      .form-signin input[type="text"],
      .form-signin input[type="password"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
      }

    </style>

  </head>

  <body>
<br/>

	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading"><h2 class="form-signin-heading">Please Login</h2></div>
				<div class="panel-body">
					<?php echo $this->Form->create('User', array('action' => 'login', 'class' => 'form-signin'));?>
                                            
                                        <?php
                                        echo $this->Form->input('username',array('placeholder'=>'Username', 'class' => 'input-block-level', 'label' => 'Username', 'div' => false));
                                        echo $this->Form->input('password',array('placeholder'=>'Password', 'class' => 'input-block-level', 'label' => 'Password', 'div' => false));
                                        ?>	
                                            <div class="form-group">
                                                <?php echo $this->Form->submit(__('Login'), array('class' => 'btn btn-primary')); ?>
                                            </div>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->
        <br/><br/><br/>