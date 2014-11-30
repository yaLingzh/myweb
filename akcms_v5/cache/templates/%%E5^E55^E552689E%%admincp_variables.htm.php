<?php /* Smarty version 2.6.13, created on 2014-11-27 09:45:11
         compiled from admincp_variables.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'h', 'admincp_variables.htm', 21, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admincp_header.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<script language="javascript">
var i = 0;
function addvariable() {
	i ++;
	$("#addheader").after("<tr><td></td><td><input type='text' style='width:100px;' name='variable_" + i + "' value=''></td><td><input type='text' style='width:220px;' name='description_" + i + "' /></td><td><input type='text' style='width:220px;' name='standby_" + i + "' value='' /></td><td><select name='type_" + i + "'><?php echo $this->_tpl_vars['typeoptions']; ?>
</select></td><td></td><td></td>");
}
function deletevariable(variable) {
	if(confirm('<?php echo $this->_tpl_vars['lan']['suredelvariable']; ?>
')) {
		document.location='index.php?file=admincp&action=variables&job=delete&vc=<?php echo $this->_tpl_vars['vc']; ?>
&variable=' + variable;
	}
}
function editvariable(variable) {
	document.location='index.php?file=admincp&action=variable&variable=' + variable;
}
</script>
<body>
<div class="block"></div>
<table cellspacing="1" cellpadding="4" class="commontable width100">
	<tr class="header">
		<td colspan="3"><div class="righttop"><?php echo h(array('k' => 'custom-variables'), $this);?>
</div><?php echo $this->_tpl_vars['lan']['variable']; ?>
</td>
	</tr>
	<tr>
		<td>
		<form enctype="multipart/form-data" action="index.php?file=admincp&action=variables&job=save" method="post">
		<table cellpadding="4" cellspacing="1" id="variables" class="commontable width100">
			<tr class="header">
				<td width="30">ID</td>
				<td width="128"><?php echo $this->_tpl_vars['lan']['variable']; ?>
</td>
				<td width="158"><?php echo $this->_tpl_vars['lan']['description']; ?>
</td>
				<td width="88"><?php echo $this->_tpl_vars['lan']['standby']; ?>
</td>
				<td width="30"><?php echo $this->_tpl_vars['lan']['type']; ?>
</td>
				<td><?php echo $this->_tpl_vars['lan']['data']; ?>
</td>
				<td width="35"><?php echo $this->_tpl_vars['lan']['delete']; ?>
</td>
			</tr>
			<?php echo $this->_tpl_vars['variables']; ?>

			<tr id="addheader" class="header"><td colspan="7"><a href='javascript:addvariable()'>+<?php echo $this->_tpl_vars['lan']['add']; ?>
</a></td></tr>
		</table>
		<div class="block2"></div>
		<center><input type="submit" value="<?php echo $this->_tpl_vars['lan']['save']; ?>
" /></center>
		</form>
		</td>
	</tr>
</table>
</body>
</html>