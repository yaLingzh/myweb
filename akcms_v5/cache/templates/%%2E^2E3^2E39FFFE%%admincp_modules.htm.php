<?php /* Smarty version 2.6.13, created on 2014-11-27 09:45:20
         compiled from admincp_modules.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'h', 'admincp_modules.htm', 6, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admincp_header.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<body>
<div class="block"></div>
<table cellspacing="1" cellpadding="4" align="center" class="commontable">
	<tr class="header">
		<td colspan="3"><div class="righttop"><?php echo h(array('k' => 'modules:?'), $this);?>
</div><?php echo $this->_tpl_vars['lan']['managemodules']; ?>
</td>
	</tr>
	<tr>
		<td>
			<table border="0" cellpadding="4" cellspacing="1" class="commontable">
			<tr class="header">
				<td width="35">ID</td>
				<td><?php echo $this->_tpl_vars['lan']['modulename']; ?>
</td>
				<td><?php echo $this->_tpl_vars['lan']['del']; ?>
</td>
			</tr>
			<?php echo $this->_tpl_vars['moduleslist']; ?>

			<tr>
				<td colspan="5"><input type="button" onclick="document.location='index.php?file=admincp&action=modules&job=addmodule'" value="<?php echo $this->_tpl_vars['lan']['addmodules']; ?>
"></td>
			</tr>
			</table>
		</td>
	</tr>
</table>
</body>
</html>