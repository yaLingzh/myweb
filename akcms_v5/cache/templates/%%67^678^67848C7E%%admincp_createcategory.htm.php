<?php /* Smarty version 2.6.13, created on 2014-11-27 08:08:12
         compiled from admincp_createcategory.htm */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admincp_header.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<script language="javascript">
function invertselection() {
	for(i = 0; i < document.batchform.elements.length; i++) {
		if(document.batchform.elements[i].type == 'checkbox' && document.batchform.elements[i].name == 'cid[]') {
			if(document.batchform.elements[i].checked == true) {
				document.batchform.elements[i].checked = false;
			} else {
				document.batchform.elements[i].checked = true;
			}
		}
	}
}
</script>
<body>
<table border="0" cellspacing="1" cellpadding="4" class="commontable" align="center">
	<tr class="header">
		<td colspan="3"><?php echo $this->_tpl_vars['lan']['createcategorybatch']; ?>
</td>
	</tr>
	<form action="index.php?file=admincp&action=createcategory&do=batch" method="post" name="batchform" id="batchform">
	<?php echo $this->_tpl_vars['categorieslist']; ?>

	<tr>
		<td colspan="3" style="text-align:center;">
			<input type="submit" value="<?php echo $this->_tpl_vars['lan']['createcategorybatch']; ?>
">
		</td>
	</tr>
	</form>
</table>
</body>
</html>