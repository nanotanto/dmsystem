   		<div class="row">
			<ol class="breadcrumb">
				<li><a href="claim"><span class="glyphicon glyphicon-open-file"></span></a></li>
				<li class="active">List Drawing</li>
			</ol>
		</div><!--/.row-->
                <p></p>
				
<div class="drawings index" style="margin-left: 25px; margin-right: 25px; margin-top: 5px">
    <?php if ($current_user['role'] == 'admin-NMIS'): ?>
<?php echo $this->Element('navigation'); ?>  
    <?php endif; ?>
        
<table border="0" cellpadding="0" cellspacing="0" style="width:100%">
        <tr>
            <th style="width:33%;"></th>
            <th style="width:33%; text-align: center; font-size: 20px;">LIST DRAWING</th>
            <th style="width:33%;"></th>
        </tr>
    </table>

	<div class="row">


		<div class="">
			<div class="CSSTableGenerator" style="overflow:scroll; width:100%; height:600px" >
			<table id="example" cellpadding="0" cellspacing="0" class="table table-striped">
				<thead>
					<tr>
						<th>Drawing No</th>
						<th>Part No YPMI</th>
						<th>Part Name</th>
						<th>Rev.</th>
						<th>Rev. Rec.</th>
						<th>Prty</th>
						<th>Location</th>
						<th>Bambi</th>
						<th>Page</th>
					</tr>
				</thead>
				<tbody>
				<?php foreach ($drawings as $drawing): ?>
					<tr>
						<td><?php echo h($drawing['Drawing']['name']); ?>&nbsp;</td>
						<td><?php echo h($drawing['Drawing']['part_no']); ?>&nbsp;</td>
						<td><?php echo h($drawing['Drawing']['part_name']); ?>&nbsp;</td>
						<td><?php echo h($drawing['Drawing']['rev_mark']); ?>&nbsp;</td>
						<td><?php echo h($drawing['Drawing']['rev_record']); ?>&nbsp;</td>
						<td><?php echo h($drawing['Drawing']['priority']); ?>&nbsp;</td>
						<td><?php echo h($drawing['Drawing']['location']); ?>&nbsp;</td>
						<td><?php echo h($drawing['Drawing']['bambi']); ?>&nbsp;</td>
						<td><?php echo h($drawing['Drawing']['page']); ?>&nbsp;</td>
						
					</tr>
				<?php endforeach; ?>
				</tbody>
				
			</table>
			</div>



		</div> <!-- end col md 9 -->
	</div><!-- end row -->


</div><!-- end containing of content -->