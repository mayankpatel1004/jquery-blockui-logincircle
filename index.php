<script type="text/javascript" src="jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="jquery.blockUI.js"></script>
<script type="text/javascript" src="jquery.corner.js"></script>
<script type="text/javascript">
jQuery.noConflict();
jQuery(document).ready(function() 
{	
	jQuery('#open_block').click(function()
	{
		jQuery(this).corner();
		jQuery.blockUI({ message: jQuery('#close_block'), css: {position: 'absolute', width: 'auto'} }); 
		jQuery('.blockOverlay').attr('title','Click to unblock').click(jQuery.unblockUI);
	}); 
});
</script>
<div id="open_block">Show Content</div>
<div id="close_block" style="display:none">
	<div onclick="jQuery.unblockUI();">Close block</div>
	<form name="frm" method="post" action="#" class="frm">
		<table align="center" cellpadding="0" cellspacing="0" border="1">
			<tr>
				<td>Name</td>
				<td><input type="text" name="txtName" /></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="Save" /></td>
				<td><input type="reset" name="reset" value="Cancel" /></td>
			</tr>
		</table>
	</form>
</div>
<style type="text/css">.blockMsg{ width:350px !important; height:250px !important; padding: 100px 0px 0px 0px !important; border-radius: 150% 150% 150% 150% !important;top:10% !important;}</style>