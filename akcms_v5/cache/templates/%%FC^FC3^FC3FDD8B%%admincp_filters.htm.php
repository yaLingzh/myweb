<?php /* Smarty version 2.6.13, created on 2014-11-27 09:45:19
         compiled from admincp_filters.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'h', 'admincp_filters.htm', 13, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admincp_header.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<script language="javascript">
function deletefilter(id) {
	if(confirm('<?php echo $this->_tpl_vars['lan']['suredelfilter']; ?>
')) {
		document.location='index.php?file=admincp&action=filters&job=delete&vc=<?php echo $this->_tpl_vars['vc']; ?>
&id=' + id;
	}
}
</script>
<body>
<div class="block"></div>
<table cellspacing="1" cellpadding="4" class="commontable width100">
	<tr class="header">
		<td colspan="3"><div class="righttop"><?php echo h(array('k' => 'filter-example:filterexample'), $this);?>
&nbsp;<?php echo h(array('k' => 'filter:help'), $this);?>
</div><?php echo $this->_tpl_vars['lan']['filter']; ?>
</td>
	</tr>
	<tr>
		<td>
		<table cellpadding="4" cellspacing="1" class="commontable width100">
			<tr class="header">
				<td width="30">ID</td>
				<td><?php echo $this->_tpl_vars['lan']['alias']; ?>
</td>
				<td><?php echo $this->_tpl_vars['lan']['remark']; ?>
</td>
				<td><?php echo $this->_tpl_vars['lan']['data']; ?>
</td>
				<td><?php echo $this->_tpl_vars['lan']['edit']; ?>
</td>
				<td><?php echo $this->_tpl_vars['lan']['delete']; ?>
</td>
			</tr>
			<?php echo $this->_tpl_vars['filters']; ?>

		</table>
		
		</td>
	</tr>
</table>
<div class="block"></div>
	<form action="index.php?file=admincp&action=filters&job=new" method="post">
	<table cellpadding="4" cellspacing="1" class="commontable width100">
		<tr class="header">
			<td><?php echo $this->_tpl_vars['lan']['addfilter']; ?>
</td>
		</tr>
		<tr>
			<td><?php echo $this->_tpl_vars['lan']['alias']; ?>
 <input type="text" name="title"></td>
		</tr>
		<tr>
			<td><?php echo $this->_tpl_vars['lan']['remark']; ?>
 <input type="text" name="remark" style="width:300px;"></td>
		</tr>
		<tr>
			<td align="center"><textarea name="filter" style="width:100%;height:200px;" class="mustoffer"></textarea><br /><input type="submit" value="<?php echo $this->_tpl_vars['lan']['save']; ?>
"></td>
		</tr>
	</table>
	</form>
</body>
</html>