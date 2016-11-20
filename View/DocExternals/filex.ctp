<script type="text/javascript">

window.addEventListener("keyup",kPress,false);
function kPress(e)
{ 
var c=e.keyCode||e.charCode; 
if (c==44) alert("Please do not print screen, this document is confidential");
$("body").hide();
}

  </script>
  
	<?php if ($current_user['group_id'] == '3' or $current_user['group_id'] == '4' or $current_user['group_id'] == '1') : ?>
	<center> <span style="color:red;">This document is confidential (please do not print, save, or print screen)</span> </center>
	
			<iframe frameborder="0" style="width:100%;height:640px;" src="/qasystems/ViewerJS/?zoom=page-width#../files/yqs/<?php echo h($docExternal['DocExternal']['file']); ?>" ></iframe>
		<!--	<iframe frameborder="0" style="width:100%;height:600px;" src="/qasystems/pdfjs/web/viewer.html?id=<?php echo h($docExternal['DocExternal']['file']); ?>" ></iframe> -->
			
	<?php else: ?>	
			<center> <h2 style="color:blue;">"Access denied, You are not authorized to access this document"</h2> </center>
	<?php endif; ?>	