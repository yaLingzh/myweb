<?php /* Smarty version 2.6.13, created on 2014-11-28 03:47:08
         compiled from admincp_category_new.htm */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admincp_header.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<body>
<div class="block"></div>
<form action="index.php?file=admincp&action=newcategory" method="post" name="categoryedit">
<table cellpadding="5" cellspacing="1" class="commontable width100">
<tr class="header">
	<td colspan="10"><?php echo $this->_tpl_vars['lan']['category_new']; ?>
</td>
</tr>
<tr>
	<td width="100"><?php echo $this->_tpl_vars['lan']['category_name']; ?>
</td>
	<td><input type="text" name="category" class="mustoffer"></td>
</tr>
<tr>
	<td colspan="10" align="center"><input type="submit" value="<?php echo $this->_tpl_vars['lan']['save']; ?>
" name="category_new_submit"></td>
</tr>
</table>
<input type="hidden" name="categoryup" value="<?php echo $this->_tpl_vars['parent']; ?>
">
</form>
</body>
</html>